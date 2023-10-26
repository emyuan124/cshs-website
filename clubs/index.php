<!DOCTYPE html>
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <script src="../js/clubs.js"></script>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night">
    <style>
        .dark_gradient {
            background: linear-gradient(to bottom, transparent 0%, transparent 60%, #191e24 77%, #191e24 100%);
        }
        .light_gradient {
            background: linear-gradient(to bottom, transparent 0%, transparent 60%, #f0f6ff 77%, #f0f6ff 100%);
        }
    </style>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
    <div class="pt-[60px] flex flex-col justify-between min-h-screen ">
    <div class="mb-5 text-5xl font-bold text-center py-12 max-w-[1800px] mx-auto">
        <h1 class="">Fossil Clubs and Organizations List</h1>
        <h2 class="text-2xl"><a href="http://clubs.frhs.tech">clubs.frhs.tech</a></h2>
        <p class="text-2xl py-6">In order to create a single unified location for all the clubs at Fossil, CSHS
        (Computer Science Honor Society) has created a system to display every club and organization that is easily
        updatable. To add your club to this list, simply fill out
        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
        href="https://forms.gle/kjD5jCpkpFvT9Bop9">this form</a>, and CSHS will approve your club very quickly.</p>

        <p class="text-2xl ">Some clubs have long descriptions. To read the whole description, or to see the meeting
        info, simply click on the club and a popup will appear.</p>
    </div>
    <div class="flex flex-wrap justify-center items-center gap-10 mt-12">
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
                        if ($rowData["Name"] != ""){
                            $csvData[] = $rowData; // Add the row data to the result array
                        }
                    }
                    fclose($handle);
                }
                return $csvData;
            }

            // Get CSV data in the desired format
            $csvData = readCSV($csvFilePath);

            // Alphabetizes the list
            usort($csvData, function($a, $b) {
                return strcmp($a['Name'], $b['Name']);
            });

            // Loop through the CSV data and generate HTML for each entry
            foreach ($csvData as $i => $row) {
                //Gets each value from the array for ease of use
                $name = htmlspecialchars($csvData[$i]["Name"]);
                $description = htmlspecialchars($csvData[$i]["Description"]);
                $type = htmlspecialchars($csvData[$i]["Type"]);
                $contact = htmlspecialchars($csvData[$i]["Contact"]);
                $meetTimes = htmlspecialchars($csvData[$i]["MeetTimes"]);
                $location = htmlspecialchars($csvData[$i]["Location"]);
                $logo = htmlspecialchars($csvData[$i]["Logo"]);
                $website = htmlspecialchars($csvData[$i]["Website"]);

                // Gets the theme if a cookie exists, otherwise default to dark
                if (isset($_COOKIE['theme'])){
                    $theme = $_COOKIE['theme'];
                } else {
                    $theme = 'dark';
                }


                if ($theme === 'dark') {
                    $gradient_color = 'dark_gradient';
                } else {
                    $gradient_color = 'light_gradient';
                }

                // Output the HTML block for each entry
                ?>
                <div onclick="openModal(<?php echo $i; ?>)" class="group hover:bg-primary bg-base-200 card card-side w-[95%] sm:w-[500px] h-[200px] sm:h-[250px] bg-base-100 shadow-xl transition duration-200 cursor-pointer">
                  <?php if(!empty($logo)){ ?>
                        <img src="<?php echo $logo; ?>" class="object-cover w-2/5 sm:w-[250px] rounded-l-2xl group-hover:opacity-75 transition duration-200" alt="Logo"/>
                  <?php } ?>
                  <div class="basis-3/5 sm:basis-1/2 card-body group-hover:text-white transition duration-150 relative">
                    <div class="group-hover:hidden absolute w-full h-full <?php echo $gradient_color; ?> top-0 left-0 z-10"></div>
                    <h2 class="card-title max-sm:text-lg max-lg:justify-center"><?php echo $name; ?></h2>
                    <p class="max-sm:text-sm overflow-hidden">
                        <?php echo $description; ?>
                    </p>
                    <div class="card-actions self-stretch justify-end">
                      <div class="z-20 badge-sm sm:badge-md badge badge-outline"><?php echo $type; ?></div> 
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
    <div class="hero justify-center items-center">
        <p class="py-6">To add your club to this list, please fill out
        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
        href="https://forms.gle/kjD5jCpkpFvT9Bop9">this form</a>.
        To report an error, please email
        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
        href="mailto:cshs@frhs.tech">cshs@frhs.tech</a></p>
    </div>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>