<html>
  <? include('_html_head.php'); ?>
  <body class="signmix-sign-new">
    <main>
      <nav>
        <a href="index.php">Close</a>
      </nav>
        <article>
          <form>
            <header>
              <span class="username">Username</span>
              <span class="date">03/31/2014</span>
            </header>
            <fieldset id="new-shape">
              <legend>
                Choose a shape
              </legend>
              <div class="field field-cancel">
                <label for="shape-cancel">Cancel</label>
                <input id="shape-cancel" type="radio" name="shape"></input>
              </div>
              <div class="field field-diamond">
                <label for="shape-diamond">Diamond</label>
                <input id="shape-diamond" type="radio" name="shape"></input>
              </div>
              <div class="field field-green-rectangle">
                <label for="shape-green-rectangle">Green Rectangle</label>
                <input id="shape-green-rectangle" type="radio" name="shape"></input>
              </div>
              <div class="field field-red-rectangle">
                <label for="shape-red-rectangle">Red Rectangle</label>
                <input id="shape-red-rectangle" type="radio" name="shape"></input>
              </div>
              <div class="field field-octagon">
                <label for="shape-octagon">Octagon</label>
                <input id="shape-octagon" type="radio" name="shape"></input>
              </div>
              <div class="field field-arrow">
                <label for="shape-arrow">Arrow</label>
                <input id="shape-arrow" type="radio" name="shape"></input>
              </div>
            </fieldset>
<!--             <fieldset id="new-color">
              <legend>
                Choose a color
              </legend>
              <div class="field field-color-red">
                <label for="color-red">Red</label>
                <input id="color-red" type="radio" name="color"></input>
              </div>
              <div class="field field-color-yellow">
                <label for="color-yellow">Yellow</label>
                <input id="color-yellow" type="radio" name="color"></input>
              </div>
              <div class="field field-color-green">
                <label for="color-green">Green</label>
                <input id="color-green" type="radio" name="color"></input>
              </div>
              <div class="field field-color-black">
                <label for="color-black">Black</label>
                <input id="color-black" type="radio" name="color"></input>
              </div>
              <div class="field field-color-white">
                <label for="color-white">White</label>
                <input id="color-white" type="radio" name="color"></input>
              </div>
            </fieldset>
 -->            <fieldset id="new-icon">
              <legend>
                Icon
              </legend>
              <div class="field field-icon-puppy">
                <label for="puppy-icon">Puppy</label>
                <input type="radio" id="puppy-icon" name="icon"></input>
              </div>
              <div class="field field-icon-rabbit">
                <label for="rabbit-icon">Rabbit</label>
                <input type="radio" id="rabbit-icon" name="icon"></input>
              </div>
              <div class="field field-icon-person">
                <label for="person-icon">Person</label>
                <input type="radio" id="person-icon" name="icon"></input>
              </div>
              <div class="field field-icon-armadillo">
                <label for="armadillo-icon">Armadillo</label>
                <input type="radio" id="armadillo-icon" name="icon"></input>
              </div>
              <div class="field field-icon-giraffe">
                <label for="giraffe-icon">Giraffe</label>
                <input type="radio" id="giraffe-icon" name="icon"></input>
              </div>
            </fieldset>
            <div class="field field-text">
              <label>Write your text</label>
              <input class="field-text-line-1" placeholder="Line 1">
              <input class="field-text-line-2" placeholder="Line 2">
              <input class="field-text-line-3" placeholder="Line 3">
              <input class="field-text-line-4" placeholder="Line 4">
            </div>
            <footer>
              <button type="submit" class="download">Download</button>
              <button type="submit" class="share">Share</button>
            </footer>
            </form>
        </article>
    </main>
  </body>
</html>