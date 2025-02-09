<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keaktifan Guru</title>
    <style>
        /* Styling untuk tampilan layar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color: #f4f4f9; */
        }

        .container {
            width: 100%;
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .status {
            font-weight: bold;
        }

        .hari {
            font-style: italic;
        }

        .heading {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Styling untuk format cetak A4 Landscape */
        @page {
            size: A4 landscape;
            margin: 10mm;
        }

        /* Styling untuk media print */
        @media print {
            body {
                width: 100%;
                font-size: 12pt;
            }

            .container {
                width: 100%;
                padding: 0;
            }

            .table-wrapper {
                width: 100%;
                overflow: visible;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                font-size: 10pt;
            }

            th, td {
                padding: 10px;
                text-align: left;
                border: 1px solid #ddd;
            }

            th {
                background-color: #4CAF50;
                color: white;
                font-weight: bold;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            .status {
                font-weight: bold;
            }

            .hari {
                font-style: italic;
            }

            .heading {
                font-size: 18pt;
                margin-bottom: 30px;
            }

            /* Remove margins/padding for print layout */
            .container {
                padding: 0;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="table-wrapper">
        <h1 class="heading">Data Keaktifan Guru</h1>
        <p class="heading">Semester: {{ $semester }}, Tahun Ajaran: {{ $tahunAjaran }}</p>
        <table>
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Kelas</th>
                    <th>Status Keaktifan</th>
                    <th>Hari</th>
                    <th>Hadir</th>
                    <th>Tidak Hadir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guru as $item)
                <tr>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->guru }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td class="status">
                        @if ($item->hadir > 0) Aktif
                        @else Tidak Aktif
                        @endif
                    </td>
                    <td class="hari">{{ $item->hari }}</td>
                    <td>{{ $item->hadir }}</td>
                    <td>{{ $item->tidakHadir }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

</body>
</html>
