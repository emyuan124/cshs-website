<!DOCTYPE html>
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <script src="../js/clubs.js"></script>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="pt-[60px] flex flex-col justify-between min-h-screen">
    <div class="flex justify-center items-center gap-10 mt-12">
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

            // Loop through the CSV data and generate HTML for each entry
            foreach ($csvData as $i => $row) {
                $name = $csvData[$i]["Name"];
                $description = $csvData[$i]["Description"];
                $type = $csvData[$i]["Type"];
                $contact = $csvData[$i]["Contact"];
                $meetTimes = $csvData[$i]["MeetTimes"];
                $location = $csvData[$i]["Location"];
                $logo = $csvData[$i]["Logo"];
                $website = $csvData[$i]["Website"];

                // Output the HTML block for each entry
                ?>
                <div onclick="openModal(<?php echo $i; ?>)" class="group hover:bg-primary bg-base-200 card card-side w-[95%] sm:w-[500px] h-[200px] sm:h-[250px] bg-base-100 shadow-xl transition duration-200 cursor-pointer">
                  <img src="<?php echo $logo; ?>" class="object-cover w-2/5 sm:w-[250px] rounded-l-2xl group-hover:opacity-75 transition duration-200" alt="Logo"/>
                  <div class="basis-3/5 sm:basis-1/2 card-body group-hover:text-white transition duration-150">
                    <h2 class="card-title max-sm:text-lg max-lg:justify-center"><?php echo $name; ?></h2>
                    <p class="max-sm:text-sm"><?php echo $description; ?></p>
                    <div class="card-actions justify-end">
                      <div class="badge-sm sm:badge-md badge badge-outline"><?php echo $type; ?></div> 
                    </div>
                  </div>
                </div>
                <dialog id="<?php echo $i; ?>" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg"><?php echo $name; ?> Information</h3>
                        <div class="pt-4 pb-2 flex flex-row flex-wrap gap-y-4 text-sm">
                            <div class="basis-1/2 flex justify-start gap-2 items-center">
                                <i class="fi fi-rr-marker"></i>
                                <?php echo $location; ?>
                            </div>
                            <div class="basis-1/2 flex justify-start gap-2 items-center">
                                <i class="fi fi-rr-calendar-clock"></i>
                                <?php echo $meetTimes; ?>
                            </div>
                            <div class="basis-1/2 flex justify-start gap-2 items-center">
                                <i class="fi fi-rr-at"></i>
                                <?php if (!empty($contact)): ?>
                                    <a href="mailto:<?php echo $contact; ?>" target="_blank" class="!outline-none !border-none link"><?php echo $contact; ?></a>
                                <?php else: ?>
                                    <span>No Contact</span>
                                <?php endif; ?>
                            </div>
                            <div class="basis-1/2 flex justify-start gap-2 items-center">
                                <i class="fi fi-rr-link-alt"></i>
                                <?php if (!empty($website)): ?>
                                    <a href="<?php echo $website; ?>" class="!outline-none !border-none link" target="_blank"><?php echo $website; ?></a>
                                <?php else: ?>
                                    <span>No Link</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="divider">Description</div>
                        <div class="text-center">
                            <?php echo $description; ?>
                        </div>
                    </div>
                    <form method="dialog" class="modal-backdrop">
                        <button class="outline-none border-none">close</button>
                    </form>
                </dialog>
                <?php
            }
        ?>
    </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>