<!DOCTYPE html>
<meta http-equiv="Refresh" content="0; url='frhs.tech/404'" />
<html lang="en">
<head>
    <title>FRHS Tech</title>
    <script src="../js/clubs.js"></script>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>

</head>
<meta http-equiv="refresh" content="0;frhs.tech/404">
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

    <script>
    //IDs of Checkboxes that correspond EXACTLY to an attribute property (from php)
    const MeetDayCheckboxIDs = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'other'];
    const TypeCheckboxIDs = ["general", "honor", "comp", "sport"];
    const stuRunCheckboxIDs = ["stuRun", "notStuRun"];
    const feeCheckboxIDs = ["fee", "nofee"];
    const appCheckboxIDs = ["app", "noapp"];
    const ListOfAllFilters = [MeetDayCheckboxIDs, TypeCheckboxIDs, stuRunCheckboxIDs, feeCheckboxIDs, appCheckboxIDs];

    // REMEMBER TO UPDATE THE LIST OF EMPTY LISTS DOWN BELOW!!!!

    function resetFilters(){
        // iterates through the list of filters
        for(filter in ListOfAllFilters){
            //Iterates through the list of checkbox IDs within the filter
            for(CheckID in ListOfAllFilters[filter]){
                // Sets the checkbox to checked
                document.getElementById(ListOfAllFilters[filter][CheckID]).checked = true;
            }
        }

        // Disables OR mode
        document.getElementById("orMode").checked = false;

        //Updates filters after resetting
        updateFilters();
    }

    function judgeDiv(divFilters, filters, orMode){
        //for OR mode
        if(orMode){
            for(filter in filters){
                // in OR mode, a single filter that works returns true
                if(judgeFilter(divFilters, filters[filter])){
                    return true;
                }
            }
            return false;
        } else{ // for AND mode
            for(filter in filters){
                // in AND mode, a single filter miss returns false
                if(!judgeFilter(divFilters, filters[filter])){
                    return false;
                }
            }
            return true;
        }
    }

    //Checks a single filter to see if a div works with the filter
    function judgeFilter(DivFilters, filter){
        for(filterItem in filter){
            if(DivFilters.includes(filter[filterItem])){
                return true;
            }
        }
        return false
    }

    function updateFilters(){
        // Filters is a list of lists
        // Each inner list is one of the filters
        // Make sure this list is as long as the total number of filters
        var filters = [[],[],[],[],[]];



        // Iterates through the list of filters
        for(filter in ListOfAllFilters){
            //Iterates through the list of checkbox IDs within the filter

            for(CheckID in ListOfAllFilters[filter]){
                // If a checkbox is checked, add its ID name as a filter
                if(document.getElementById(ListOfAllFilters[filter][CheckID]).checked){
                    filters[filter].push(ListOfAllFilters[filter][CheckID])
                }
            }
        }

        // Checks to see if OR mode is enables
        var orMode = document.getElementById("orMode").checked;

        // Gets all of the divs
        var divs = document.getElementsByTagName('div');
        var filteredDivs = [];


        var allDivsHidden = true;
        var someDivsHidden = false;

        // Iterate through all divs and filter the ones with the specified filter value
        for (var i = 0; i < divs.length; i++) {
            var rawDivFilters = divs[i].getAttribute('filters');
            if(rawDivFilters != null){
                var divFilters = rawDivFilters.split(' ');
                if(!judgeDiv(divFilters, filters, orMode)){
                    divs[i].hidden = true;
                    someDivsHidden = true;
                } else {
                    divs[i].hidden = false;
                    allDivsHidden = false;
                }
            }

        }

        // Hides/shows the everything/something hidden warning depending on its state
        document.getElementById("everythingHiddenWarning").hidden = ! allDivsHidden;
        document.getElementById("somethingHiddenWarning").hidden = ! someDivsHidden;
    }
    </script>

    <div class="pt-[60px] flex flex-col justify-between">
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
        <div class="flex justify-center p-4 bg-base-300  mb-5 mx-auto">
            <div class="flex space-x-4 ">
                <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded focus:outline-none mr-2 text-white" onclick="openModal('filters')">Adjust Filters</button>

                <dialog id="filters" class="modal">
                    <div class="modal-box">
                        <!-- Filter Popup -->
                        <h1 class="font-bold text-lg">Filters</h3>
                        <div class="flex flex-wrap justify-center text-sm">
                            <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52 z-20">
                                <h2 class="font-bold text-lg">Meet Days</h3>
                                <li><label><input type="checkbox" class="mr-2" id='monday' onclick="updateFilters()" checked>Mondays</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='tuesday' onclick="updateFilters()" checked>Tuesdays</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='wednesday' onclick="updateFilters()" checked>Wednesdays</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='thursday' onclick="updateFilters()" checked>Thursdays</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='friday' onclick="updateFilters()" checked>Fridays</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='other' onclick="updateFilters()" checked>Other</label></li>
                            </ul>
                            <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52 z-20">
                                <h2 class="font-bold text-lg">Club Type</h3>
                                <li><label><input type="checkbox" class="mr-2" id='general' onclick="updateFilters()" checked>General Club</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='honor' onclick="updateFilters()" checked>Honor Society</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='comp' onclick="updateFilters()" checked>Competition Club</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='sport' onclick="updateFilters()" checked>Sport</label></li>
                            </ul>
                            <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52 z-20">
                                <h2 class="font-bold text-lg">Other properties</h3>
                                <li><label><input type="checkbox" class="mr-2" id='fee' onclick="updateFilters()" checked>Fee Required</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='nofee' onclick="updateFilters()" checked>No Fee Required</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='app' onclick="updateFilters()" checked>Application Required</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='noapp' onclick="updateFilters()" checked>No Application Required</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='stuRun' onclick="updateFilters()" checked>Student-run Club</label></li>
                                <li><label><input type="checkbox" class="mr-2" id='notStuRun' onclick="updateFilters()" checked>School-sponsored Club</label></li>
                            </ul>
                            <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52 z-20">
                                <h2 class="font-bold text-lg">Filter Mode</h3>
                                <li><label><input
                                      class="mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem]
                                      bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5
                                      before:rounded-full before:bg-transparent before:content-[''] after:absolute
                                      after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full
                                      after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)]
                                      after:transition-[background-color_0.2s,transform_0.2s] after:content-['']
                                      checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px]
                                      checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full
                                      checked:after:border-none checked:after:bg-primary
                                      checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)]
                                      checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-['']
                                      hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12]
                                      focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s]
                                       focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5
                                       focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary
                                       checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100
                                       checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]
                                       dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary
                                       dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)]
                                       dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                                      type="checkbox"
                                      role="switch"
                                      id="orMode"
                                      onclick="updateFilters()"
                                      />OR Mode</label></li>
                                <p>OR mode allows you to view clubs that match only one of the filters, even if they
                                don't match all of them. If you don't understand what this is, leave it off</p>
                            </ul>

                        </div>
                    </div>
                    <form method="dialog" class="modal-backdrop">
                        <button class="outline-none border-none">close</button>
                    </form>
                </dialog>
                <!--<details class="dropdown">
                  <summary class="m-1 btn">Meeting Days <svg class="w-4 h-4 ml-1 fill-current opacity-75 group-hover:opacity-100" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 12l-6-6h12z" />
                                                        </svg></summary>
                  <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52 z-20">
                    <li><label><input type="checkbox" class="mr-2">Mondays</label></li>
                    <li><label><input type="checkbox" class="mr-2">Tuesdays</label></li>
                    <li><label><input type="checkbox" class="mr-2">Wednesdays</label></li>
                    <li><label><input type="checkbox" class="mr-2">Thursdays</label></li>
                    <li><label><input type="checkbox" class="mr-2">Fridays</label></li>
                    <li><label><input type="checkbox" class="mr-2">Other</label></li>
                  </ul>
                </details>
                <details class="dropdown">
                  <summary class="m-1 btn">Club Type <svg class="w-4 h-4 ml-1 fill-current opacity-75 group-hover:opacity-100" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 12l-6-6h12z" />
                                                        </svg></summary>
                  <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52 z-20">
                    <li><label><input type="checkbox" class="mr-2">General Club</label></li>
                    <li><label><input type="checkbox" class="mr-2">Honor Society</label></li>
                    <li><label><input type="checkbox" class="mr-2">Competition Club</label></li>
                    <li><label><input type="checkbox" class="mr-2">Sport</label></li>
                  </ul>
                </details>-->
            </div>
            <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded focus:outline-none text-white" onclick="resetFilters()">Reset Filters</button>
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
                        if ($rowData["Name of Club"] != "" && $rowData["Approval"] == "TRUE"){
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
                return strcmp($a['Name of Club'], $b['Name of Club']);
            });

            // Loop through the CSV data and generate HTML for each entry
            foreach ($csvData as $i => $row) {
                //Gets each value from the array for ease of use
                // Special chars filtered as per https://xkcd.com/327/
                $name = htmlspecialchars($csvData[$i]["Name of Club"]);
                // Description removes all special chars and adds line breaks back in
                $description = str_replace(htmlspecialchars("<br>"), "<br>", htmlspecialchars($csvData[$i]["Description of club (general description, what you do, events you run, etc.)"]));
                $type = htmlspecialchars($csvData[$i]["Club Type"]);
                $contact = htmlspecialchars($csvData[$i]["Contact Email"]);
                $meetTimes = htmlspecialchars($csvData[$i]["Club meeting times"]);
                $location = htmlspecialchars($csvData[$i]['Meeting Location (e.g. "N117" or "Roundhouse")']);
                $logo = htmlspecialchars($csvData[$i]["Club Logo URL"]);
                $website = htmlspecialchars($csvData[$i]["If your club has a website (or master log) you would like to link to, please include the URL here"]);

                // Extra club properties from checkbox
                $extraProperties = explode(', ', htmlspecialchars($csvData[$i]["Please check the boxes for any of the following that apply to your club"]));
                $feeReq = in_array("My club requires members to pay a fee for participation", $extraProperties);
                $appReq = in_array("My club requires an application to join", $extraProperties);
                $stuRun = in_array("My club is Student-run (Admin made me fill out a special form at the beginning of the year)", $extraProperties);

                // Gets properties of club for filtering purposes
                $clubAttributes = [];
                $meetDays = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];
                $meetDayFound = false;
                foreach ($meetDays as $meetDay){
                    // Checks to see if the club meet times mentions the day of the week
                    if(strpos(strtolower($meetTimes), $meetDay ) !== false){
                        // if so, append it to the list of clubAttributes (for filtering)
                        $clubAttributes[] = $meetDay;
                        $meetDayFound = true;
                    }
                }

                // Sets the club meet day to 'other' if no meeting day was found in the previous step
                if(! $meetDayFound){
                    $clubAttributes[] = 'other';
                }

                // Converts club type into a clubAttribute (for filtering)
                $clubTypeConversions = [
                    "General Club" => "general",
                    "Honor Society" => "honor",
                    "Competition Club" => "comp",
                    "Sport" => "sport"
                ];
                $shortClubType = $clubTypeConversions[$type];
                // and adds it to the clubAttributes list
                $clubAttributes[] = $shortClubType;

                // For binary values like "fee" or "nofee", a janky if statement is used
                if($feeReq){
                    $clubAttributes[] = 'fee';
                } else {
                    $clubAttributes[] = 'nofee';
                }
                if($appReq){
                    $clubAttributes[] = 'app';
                } else {
                    $clubAttributes[] = 'noapp';
                }
                if($stuRun){
                    $clubAttributes[] = 'stuRun';
                } else {
                    $clubAttributes[] = 'notStuRun';
                }

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
                <div onclick="openModal(<?php echo $i; ?>)" class="group hover:bg-primary bg-base-200 card card-side
                w-[95%] sm:w-[500px] h-[200px] sm:h-[250px] bg-base-100 shadow-xl transition duration-200 cursor-pointer"
                filters = "<?php echo implode(' ', $clubAttributes)?>">
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
                      <div class="badge-sm sm:badge-md badge badge-outline" style="z-index: 15"><?php echo $type; ?></div>
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
                            <?php if($appReq):?>
                                <div class="basis-1/2 flex justify-start gap-2 items-center">
                                    <i class="fi fi-rr-edit"></i>
                                    <span>Application required</span>
                                </div>
                            <?php endif; ?>
                            <?php if($feeReq):?>
                                <div class="basis-1/2 flex justify-start gap-2 items-center">
                                    <i class="fi fi-rr-coins"></i>
                                    <span>Fee required</span>
                                </div>
                            <?php endif; ?>
                            <?php if($stuRun):?>
                                <div class="basis-1/2 flex justify-start gap-2 items-center">
                                    <i class="fi fi-rr-users-alt"></i>
                                    <span>Student-run club</span>
                                </div>
                            <?php endif; ?>
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
    <div class="mb-5 text-4xl font-bold text-center py-12 max-w-[1800px] mx-auto" id="everythingHiddenWarning" hidden>
            <h1 class="">Looks like none of the clubs passed your filters!</h1>
    </div>
    <div class="mb-5 text-3xl font-bold text-center py-12 max-w-[1800px] mx-auto" id="somethingHiddenWarning" hidden>
            <h1 class="">At least one club has been filtered out of your list!</h1>
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
  <script>
    // Resets filters when the page is finished loading
    resetFilters();
  </script>

  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>
