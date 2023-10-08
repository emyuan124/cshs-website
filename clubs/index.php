<!DOCTYPE html>
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="pt-[60px] flex flex-col justify-between min-h-screen">
    <div class="text-center mt-12">
        Testing :) <br>

        <?php
            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL);

            // File path to the CSV file
            $csvFilePath = '.club-spreadsheet.csv';

            // Function to read CSV file and return data in desired format
            function readCSV($filePath)
            {
                $csvData = [];
                if (($handle = fopen($filePath, 'r')) !== false) {
                    $headers = fgetcsv($handle); // Get the column names from the first row
                    while (($row = fgetcsv($handle)) !== false) {
                        $rowData = [];
                        foreach ($headers as $index => $header) {
                            $rowData[$header] = $row[$index]; // Associate column names with values
                        }
                        $csvData[] = $rowData; // Add the row data to the result array
                    }
                    fclose($handle);
                }
                return $csvData;
            }

            // Get CSV data in the desired format
            $csvData = readCSV($csvFilePath);

            //echo $csvData[0]["Name"]

            foreach ($csvData as $i => $row) {
                //Gets each value from the array for ease of use
                $name = $csvData[$i]["Name"];
                $description = $csvData[$i]["Description"];
                $type = $csvData[$i]["Type"];
                $contact = $csvData[$i]["Contact"];
                $meetTimes = $csvData[$i]["MeetTimes"];
                $location = $csvData[$i]["Location"];
                $logo = $csvData[$i]["Logo"];
                $website = $csvData[$i]["Website"];

                //If you want to change the way the website displays stuff, this is the section to change
                echo
                "Name: $name<br>
                Description: $description<br>
                Type: $type<br>
                Contact: $contact<br>
                Meet times: $meetTimes<br>
                Location: $location<br>
                Logo: $logo<br>
                Website: $website<br><br><br>";
            }

         ?>
    </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>