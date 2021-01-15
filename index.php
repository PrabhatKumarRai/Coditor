<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Coditor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/icon.png" type="image/gif" sizes="16x16">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <div class="wrapper darkThemeWrapper">
      <!-- Editor Section -->
      <div class="editor darkTheme sideThemeEditor">
        <form action="controller/saveFile.php" method="POST">
          <div class="editor-top">
            <div class="editor-top-inner">
              <div class="toggleRotate">
                <button type="button" class="borderRight" onclick="toggleMode()">Theme</button>
                <button type="button" class="borderRight" onclick="toggleOrientation()">Rotate</button>
              </div>
              <div class="fontSize p-relative">
                <button type="button" onclick="increaseFont()">+</button>
                <span class="mobile-none">Size</span>
                <button type="button" onclick="decreaseFont()">-</button>
              </div>
              <div class="p-relative">
                <input type="color" id="colorPicker"></input>
              </div>
              <button type="submit" name="submit" class="saveBtn" onclick="this.form.submit()">Save</button>
              <button type="button" name="submit" class="clearBtn d-none">Clear</button>
              <button type="button" class="executeBtn">Execute</button>
            </div>
          </div>

          <textarea class="darkTheme" id="code" name="code" data-gramm_editor="false" spellcheck="false"><!-- Type Your Code Below --></textarea>
        </form>
      </div>
      <!-- Output Section -->
      <object class="sideThemeOutput" id="output" data="output.php"></object>
    </div>


    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
