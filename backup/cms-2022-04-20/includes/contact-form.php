
<!--Contact page form-->
<div class="contact-form">
            <form action="#" method="post" id="theForm">
              <div class="one">
                <p class="form-requirement">All fields are required.</p>
              </div>

              <div class="one">
                <label for="firstName">First Name:</label>
                <input
                  type="text"
                  id="firstName"
                  name="firstName"
                  placeholder="john"
                />
              </div>

              <div class="one">
                <label for="lastName">Last Name:</label>
                <input
                  type="text"
                  id="lastName"
                  name="
                  lastName"
                  placeholder="smith"
                />
              </div>

              <div class="one">
                <label for="email"> Email:</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="john.smith@example.com"
                />
              </div>

              <div class="one">
                <label for="subject">Subject: </label>
                <select name="subject" id="subject">
                  <option value="">Select</option>
                  <option value="EN">General</option>
                  <option value="FE">Sales</option>
                  <option value="FE">Account</option>
                  <option value="GN">Other</option>
                </select>
              </div>

              <div class="one">
                <label for="checkkbox"
                  >I agree with the company's Privacy Policy</label
                >
                <input type="checkbox" id="chkbox" name="chkbox" value="" />
              </div>

              <div class="one">
                <textarea
                  name="message"
                  aria-label="messagebox"
                  id="message"
                  cols="50"
                  rows="10"
                  placeholder="Please enter your message"
                ></textarea>
              </div>
              <div class="one">
                <button
                  class="btn btn--full btn--form--newsletter"
                  id="submit"
                  type="submit"
                >
                  send
                </button>
              </div>
            </form>
          </div>