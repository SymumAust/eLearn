<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash_admin.css">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body class="">
    <div class="sidebar">
        <div class="sidebar-menu" style="display: flex;">
            <ul id="dashadmin_ul">
                <img src="images/Symum.jpg" style="height: 150px; width: auto; border-radius: 50%; margin-left: 50px ; margin-top: 20px;"  >
                <h4 style="margin-left: 40px; color: darkcyan;" >Md. Symum Hossain</h4>
                <li>

                    <a href="" class="active"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                    
                </li>

                <li>
                    <a href=""><span class="las la-inbox"></span>
                        <span>Inbox</span></a>
                    
                </li>

                <li>
                    <a href="" ><span class="las la-file-invoice"></span>
                        <span>Payment</span></a>
                    
                </li>

                <li>
                    <a href=""><span class="las la-cog"></span>
                        <span>Settings</span></a>
                    
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content" id="main_admin">
        <div class="admin_header">
            <h1  style="font-weight: strong;  color: #fa3434;">
                
                    <label for="">
                        <span class="las la-bars"></span>
                    </label>

                    eLearn
                
            </h1>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here"/>
            </div>
    
            <div class="user-wrapper">
                <input class="file-upload-input" type="file" accept="image/png,image/jpg,image/jpeg">
                <div id="display_img">
                       
                </div>
                <div>
                    <h4>Symum</h4>
                </div>
            </div>
        </div>

        <main id="admin_main" style="color: lightcoral;" style="border-radius: 10px";>
            <div style="display: flex;" >

            <div class="cards" class="admin_card"   >
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Users</span>
                    </div>
    
                    <div>
                        <span class="las la-users"style="font-size: 40px; color: red;"></span>
                    </div>
                </div>
            </div>
    
            <div class="cards" class="admin_card" > 
                <div class="card-single">
                    <div>
                        <h1>34672</h1>
                        <span>Total Enrolled courses</span>
                    </div>
    
                    <div>
                        <span class="las la-file-invoice"style="font-size: 40px; color: red;"></span>
                    </div>
                </div>
            </div>
    
            <div class="cards" class="admin_card">
                <div class="card-single">
                    <div>
                        <h1>2453</h1>
                        <span>Courses enrolled this weeek</span>
                    </div>
    
                    <div>
                        <span class="las la-file-invoice"style="font-size: 40px; color: red;"></span>
                    </div>
                </div>
            </div>
    
            <div class="cards" class="admin_card">
                <div class="card-single">
                    <div>
                        <h1>$728891</h1>
                        <span>Current Balance</span>
                    </div>
    
                    <div>
                        <span class="las la-wallet"style="font-size: 40px; color: red;"></span>
                    </div>
                </div>
            </div>
        </div>
        </main>
        
    </div>

    <div>
        
        <form class="pure-form">
    <fieldset>
        <legend>Confirm password with HTML5</legend>

        <input type="password" placeholder="Password" id="password" required>
        <input type="password" placeholder="Confirm Password" id="confirm_password" required>

        <button type="submit" class="pure-button pure-button-primary">Confirm</button>
    </fieldset>
</form>
    </div>

    
    <script src="dash_admin.js"></script>
</body>
</html>
