<?php require_once('microProtector.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Git Pull</title>
    <?php include $_SERVER["DOCUMENT_ROOT"].'/head.php'; ?>
</head>
<body data-theme="night">
  <?php include $_SERVER["DOCUMENT_ROOT"].'/titlebar.php'; ?>
  <div class="pt-[60px] flex flex-col justify-between min-h-screen">
    <div class="text-center mt-12">
        Updating website. Output shown below.
    </div>
    <?php echo(shell_exec('git pull')) ?>
  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"].'/footer.php'; ?>
</body>
</html>