<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "style.css">
        <!-- Project: Process
        Michael Vineyard
        vineyarm@csp.edu
        Assignment 4
        11/25/2021
        -->
        <title>Presentation</title>
        
    </head>
    <body>
        <div class = "header">
            <div id = "buttons">
            <button><a href = "presentation.php">home</a></button> | <button><a href = "index.php">User View</a></button> | <button><a href = "edit.php">Edit</a></button> | <button><a href = "proofOfConcept.php">Proof of Concept</a></button>
            </div>
        </div>
        <div class = "info">
            <p>Michael Vineyard | prjProcess | 11.25.2021</p>
        </div>
        <div class = "content">
        <h1>Presentation</h1>
        <strong> Q1: What types of changes will you need to make to your menu?</strong></br>
        <i>I will need to adjust items as well as prices</i></br>
        <strong>Would you prefer I just make the changes as needed or do you want a way to be able to handle it yourself?</strong></br>
        <i>It would be great to have the independence of being able to handle the changes on my end when needed.</i></br>
        <strong>Who should be able to make these changes?</strong></br>
        <i>Myself, or one of the managers</i></br>
        <strong>Would you prefer to have registered accounts, a password activated access or IP address related access to admin controls?</strong></br>
        <i>I'd prefer password related access, especially because I may not be able to always use the same device to make changes.</i></br>
        <strong>How soon would you like these changes implemented?</strong></br>
        <i>The sooner the better, we have some new menu items coming for the holiday season, that will start on Sunday.</i></br>
        </div>
        <div class = "table">
            <table>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>Kebab Sultani</td>
                    <td>$26.99</td>
                </tr>
                <tr>
                    <td>Kebab Koobideh</td>
                    <td>$18.99</td>
                </tr>
                <tr>
                    <td>Kebab Joojeh</td>
                    <td>$17.99</td>
                </tr>
                <tr>
                    <td>Sabzi Polo Ba Mahi</td>
                    <td>$22.99</td>
                </tr>
            </table>
        </div>
        <div class = "analysis">
            <h1>Analysis and Suggestions</h1>
            <p>There are two ways to handle this need.</br><strong>Option 1:</strong> Creating a database to store the information used in your menu.</br><strong>Option 2:</strong> 
        Saving the data in a text file.</br><strong>Drawbacks to option 1:</strong> The need for a database and the reliance that it is always up, especially when you need it.  My expereince has been 
    that they're pretty reliable.  It's a little more coding on my end which will have an impact on the cost of this project.</br><strong>Drawbacks to option 2:</strong> The file will be stored 
locally on the computer, so accessing it for changes and modifcations will always have to be done from that computer or done multiple times.  For example the file can be stored on 
any computer used to access the admin section but the changes made will only apply until you log in on another device, then the menu that is saved locally on that device will be the one 
that loads.</br></br><mark><strong>My recommendation</strong> is that we use a database since you said you may not always be able to log in from the same device to make changes.  This way there is only one file being 
used to control your menu and prices no matter who modifies or from where.</mark></p>
        </div>
    </body>
</html>