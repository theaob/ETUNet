<form>
        <fieldset>
          <legend><?php echo $sitename; ?> Kayıt Formu</legend>
		  <div class="clearfix">
            <label for="studentID">Öğrenci Numarası</label>
            <div class="input">
              <input class="xlarge disabled" id="disabledInput" name="studentID" size="10" type="text" disabled />
            </div>
          </div><!-- /clearfix -->
		  
		  
		  
		  
          <div class="clearfix">
            <label for="isim">İsim</label>
            <div class="input">
              <input class="xlarge" id="xlInput" name="isim" size="30" type="text" />
            </div>
          </div><!-- /clearfix -->
		  
		  <div class="clearfix">
            <label for="isim">Soyisim</label>
            <div class="input">
              <input class="xlarge" id="xlInput" name="soyisim" size="30" type="text" />
            </div>
          </div><!-- /clearfix -->
		  
		  <div class="clearfix">
            <label for="email">E-Posta</label>
            <div class="input">
              <div class="input-prepend">
                <span class="add-on">@</span>
                <input class="medium" id="prependedInput" name="email" size="30" type="text" />
              </div>
              <span class="help-block">Okul maili olmak zorunda değil</span>
            </div>
          </div><!-- /clearfix -->
		  
		  
          <div class="clearfix">
            <label for="class">Sınıf</label>
            <div class="input">
              <select name="class" id="normalSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div><!-- /clearfix -->
		  
		  <div class="clearfix">
            <label for="topic">Bölüm</label>
            <div class="input">
              <select name="topic" id="normalSelect">
                <option>Bilgisayar Mühendisliği</option>
                <option>Makina Mühendisliği</option>
                <option>Elektrik ve Elektronik Mühendisliği</option>
                <option>Endüstri Mühendisliği</option>
                <option>Biyomedikal Mühendisliği</option>
                <option>Malzeme Bilimi ve Nanoteknoloji Mühendisliği</option>
              </select>
            </div>
          </div><!-- /clearfix -->
		  
		  
		  <div class="actions">
            <input type="submit" class="btn primary" value="Gönder">&nbsp;<button type="reset" class="btn">Cancel</button>
          </div>
        </fieldset>
		  
          <div class="clearfix">
            <label for="mediumSelect">Select</label>
            <div class="input">
              <select class="medium" name="mediumSelect" id="mediumSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="multiSelect">Multiple select</label>
            <div class="input">
              <select class="medium" size="5" multiple="multiple" name="multiSelect" id="multiSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label>Uneditable input</label>
            <div class="input">
              <span class="uneditable-input">Some value here</span>
            </div>
          </div><!-- /clearfix -->
          
          <div class="clearfix">
            <label for="disabledInput">Disabled textarea</label>
            <div class="input">
              <textarea class="xxlarge" name="textarea" id="textarea" rows="3" disabled></textarea>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix error">
            <label for="errorInput">Input with error</label>
            <div class="input">
              <input class="xlarge error" id="errorInput" name="errorInput" size="30" type="text" />
              <span class="help-inline">Small snippet of help text</span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix success">
            <label for="successInput">Input with success</label>
            <div class="input">
              <input class="xlarge error" id="successInput" name="successInput" size="30" type="text" />
              <span class="help-inline">Success!</span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix warning">
            <label for="warningInput">Input with warning</label>
            <div class="input">
              <input class="xlarge error" id="warningInput" name="warningInput" size="30" type="text" />
              <span class="help-inline">Ruh roh!</span>
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <fieldset>
          
          <div class="clearfix">
            <label for="prependedInput2">Prepended checkbox</label>
            <div class="input">
              <div class="input-prepend">
                <label class="add-on"><input type="checkbox" name="" id="" value="" /></label>
                <input class="mini" id="prependedInput2" name="prependedInput2" size="16" type="text" />
              </div>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="appendedInput">Appended checkbox</label>
            <div class="input">
              <div class="input-append">
                <input class="mini" id="appendedInput" name="appendedInput" size="16" type="text" />
                <label class="add-on active"><input type="checkbox" name="" id="" value="" checked="checked" /></label>
              </div>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="fileInput">File input</label>
            <div class="input">
              <input class="input-file" id="fileInput" name="fileInput" type="file" />
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <fieldset>
          <div class="clearfix">
            <label id="optionsCheckboxes">List of options</label>
            <div class="input">
              <ul class="inputs-list">
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option1" />
                    <span>Option one is this and that&mdash;be sure to include why it’s great</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option2" />
                    <span>Option two can also be checked and included in form results</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option2" />
                    <span>Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results. Let's make it super long so that everyone can see how it wraps, too.</span>
                  </label>
                </li>
                <li>
                  <label class="disabled">
                    <input type="checkbox" name="optionsCheckboxes" value="option2" disabled />
                    <span>Option four cannot be checked as it is disabled.</span>
                  </label>
                </li>
              </ul>
              <span class="help-block">
                <strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.
              </span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label>Date range</label>
            <div class="input">
              <div class="inline-inputs">
                <input class="small" type="text" value="May 1, 2011" />
                <input class="mini" type="text" value="12:00am" />
                to
                <input class="small" type="text" value="May 8, 2011" />
                <input class="mini" type="text" value="11:59pm" />
                <span class="help-block">All times are shown as Pacific Standard Time (GMT -08:00).</span>
              </div>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="textarea2">Textarea</label>
            <div class="input">
              <textarea class="xxlarge" id="textarea2" name="textarea2" rows="3"></textarea>
              <span class="help-block">
                Block of help text to describe the field above if need be.
              </span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label id="optionsRadio">List of options</label>
            <div class="input">
              <ul class="inputs-list">
                <li>
                  <label>
                    <input type="radio" checked name="optionsRadios" value="option1" />
                    <span>Option one is this and that&mdash;be sure to include why it’s great</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="radio" name="optionsRadios" value="option2" />
                    <span>Option two is something else and selecting it will deselect option 1</span>
                  </label>
                </li>
              </ul>
            </div>
          </div><!-- /clearfix -->
        </fieldset>
      </form>