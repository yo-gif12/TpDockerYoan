<h1>My account</h1>



<form action="/update-user" method="post">
    <label for="userFirstName">First Name</label>
    <input type="text" name="userFirstName" id="userFirstName"
           value="" required/> <br/>

    <label for="userLastName">Last Name</label>
    <input type="text" name="userLastName" id="userLastName"
           value="" required/> <br/>

    <label for="userEmail">Email</label>
    <input type="email" name="userEmail" id="userEmail"
           value="" disabled required/> <br/>

    <label for="userRole">Is Admin ?</label>
    <input type="checkbox" name="userRole" id="userRole"
           value="isAdmin" /> <br/>

    <label for="userPassword">Password</label>
    <input type="password" name="userPassword" id="userPassword" required/> <br/>

    <label for="userCheckPassword">Verify Password</label>
    <input type="password" name="userCheckPassword" id="userCheckPassword" required/> <br/>
    <input type="submit" value="Update Infos"/>
</form>