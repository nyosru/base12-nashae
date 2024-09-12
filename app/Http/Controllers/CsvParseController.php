<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocbs;
use League\Csv\Reader;

class CsvParseController extends Controller
{
    public function parseCsv(Request $request)
    {
        $return = [];

        // Очищаем таблицу перед записью
        Ocbs::truncate();

        // Путь к файлу CSV
        $filePath = storage_path('app/public/narod-data/IMOCB.csv');

        if (!file_exists($filePath)) {
            return response()->json(['error' => 'Файл не найден'], 404);
        }

        // Загружаем файл CSV
        $content = file_get_contents($filePath);

        // Определяем кодировку файла и конвертируем в UTF-8, если она не UTF-8
        $encoding = mb_detect_encoding($content, ['UTF-8', 'Windows-1251', 'ISO-8859-1', 'ASCII']);

        if ($encoding !== 'UTF-8') {
            $content = mb_convert_encoding($content, 'UTF-8', $encoding);
        }

        // Пишем сконвертированный контент обратно во временный файл
        $tempFilePath = storage_path('app/public/narod-data/temp_IMOCB.csv');
        file_put_contents($tempFilePath, $content);

        // Загружаем файл CSV с правильной кодировкой
        $csv = Reader::createFromPath($tempFilePath, 'r');
        $csv->setHeaderOffset(0); // Первая строка как заголовки
        $csv->setDelimiter(';'); // Указываем разделитель — точка с запятой

        // Получаем заголовки для проверки
        $headers = $csv->getHeader();
        $return['headers'] = $headers;

        // Парсим данные
        $records = $csv->getRecords();

        // Массив для вставки данных в таблицу
        $dataToInsert = [];

        foreach ($records as $record) {
            $ee = [
                'vypal' => $record['Выпал'] ?? null,
                'nomerSceta' => $record['Номер счета'] ?? null,
                'naimenovanie' => $record['Наименование'] ?? null,
                'firma' => $record['Фирма'] ?? null,
                'debetNaNacloPerioda' => $record['ДебетНач'] ?? null,
                'kreditNaNacloPerioda' => $record['КредитНач'] ?? null,
                'oborotDebet' => $record['ДебетОб'] ?? null,
                'oborotKredit' => $record['КредитОб'] ?? null,
                'debetNaKonecPerioda' => $record['ДебетКон'] ?? null,
                'kreditNaKonecPerioda' => $record['КредитКон'] ?? null,
                'dviz' => $record['Движ'] ?? '',
                'foto' => $record['Фото'] ?? '',
                'zateya' => $record['Затея'] ?? '',
            ];

            // Добавляем запись в массив для массовой вставки
            $dataToInsert[] = $ee;
        }

        // Массовая вставка данных в таблицу
        if (!empty($dataToInsert)) {
            Ocbs::insert($dataToInsert);
        }

        $return['message'] = 'Данные успешно загружены';
        $return['count'] = count($dataToInsert);

        return response()->json($return, 200);
    }
}
