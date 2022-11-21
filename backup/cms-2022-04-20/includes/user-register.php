<!--User Registralion-->
<div class="register margin-bottom-ld">
            <form action="#" method="post" id="theForm">
              <h2 class="heading-tertiary">Register</h2>
              <p class="term">All fields are required.</p>
              <div class="one">
                <label for="firstName" id="firstNameLabel">First Name</label
                ><input
                  type="text"
                  name="firstName"
                  id="firstName"
                  placeholder="John"
                />
              </div>

              <div class="one">
                <label for="lastName" id="lastNameLabel">Last Name</label>
                <input
                  type="text"
                  name="lastName"
                  id="lastName"
                  placeholder="Smith"
                />
              </div>
              <div class="one">
                <label for="email" id="emaillabel">Email Address: </label
                ><input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="johnsmith@example.com"
                />
              </div>
              <div class="one">
                <label for="phone" id="phonelabel">Phone Number: </label
                ><input
                  type="text"
                  name="phone"
                  id="phone"
                  placeholder="04123 456 789"
                />
              </div>

              <div class="one">
                <label for="state">State</label
                ><select name="state" id="state">
                  <option value="">Select a State</option>
                  <option value="NSW">New South Wales</option>
                  <option value="SA">South Australia</option>
                  <option value="QLD">Queenland</option>
                  <option value="VIC">victoria</option>
                  <option value="CAT">Canberra</option>
                  <option value="WA">Western Australia</option>
                  <option value="NT">Northern Territory</option>
                  <option value="TAS">Tasmania</option>
                </select>
              </div>
              <div class="one">
                <label for="zip" id="zipCodeLabel">Post Code</label
                ><input type="text" name="zip" id="zip" />
              </div>
              <div class="one">
                <label for="checkbox"
                  ><span class="term">
                    I agree to the terms and conditions
                  </span></label
                >
                <input type="checkbox" name="terms" id="terms" required />
              </div>
              <div class="one">
                <input
                  type="submit"
                  value="Register"
                  id="submit"
                  class="btn btn--full"
                />
              </div>
            </form>
          </div>