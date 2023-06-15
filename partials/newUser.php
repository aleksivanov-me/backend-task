<p>Of course, we can add inputs via php foreach, but the structure is the same, and now there is no additiona llogic for
    adding some values (like lat, company catchPhrase, etc.) </p>
<p>And there should be added validation of the fields.</p>
<p>And get the control over the form via JavaScript.</p>
<form name="userForm" action="/partials/add.php" method="post" enctype="multipart/form-data">
    <p>
        <label for="name">Name</label>
        <input id="name" name="name" placeholder="name">
    </p>

    <p>
        <label for="username">Username</label>
        <input id="username" name="username" placeholder="username">
    </p>

    <p>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="email">
    </p>

    <p>
        <label for="street">Street</label>
        <input id="street" name="street" placeholder="Douglas Extension"><br>

        <label for="suite">Suit</label>
        <input id="suite" name="suite" placeholder="Suite 847"><br>

        <label for="city">City</label>
        <input id="city" name="city" placeholder="New York"><br>

        <label for="zipcode">Zipcode</label>
        <input id="zipcode" name="zipcode" placeholder="59590-4157"><br>
        <!--
        <label for="lat">Lat</label>
        <input id="lat" name="lat" placeholder="-68.6102"><br>

        <label for="lon">Lon</label>
        <input id="lon" name="lon" placeholder="-47.0653">
-->
    </p>

    <p>
        <label for="phone">Phone</label>
        <input id="phone" name="phone" placeholder="+1 (000) 000-00-00">
    </p>
    <!--
    <p>
        <label for="website">Website</label>
        <input id="website" name="website" placeholder="Website">
    </p>
-->
    <p>
        <label for="companyName">Company Name</label>
        <input id="companyName" name="companyName" placeholder="Company Name"><br>
        <!--
        <label for="companycatchPhrase">Company Catch Phrase</label>
        <input id="companycatchPhrase" name="companycatchPhrase" placeholder="Company Catch Phrase"><br>

        <label for="companybs">Company bs</label>
        <input id="companybs" name="companybs" placeholder="bs">
        -->
    </p>

    <input type="submit">
</form>