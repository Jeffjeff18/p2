<div class="content">
        <div class="info">
            <h1>Information</h1>
            <p>First Name: <?php echo $_POST['customerName']; ?> </p><br>
            <p>Middle Name: <?php echo $_POST['gender']; ?> </p><br>
            <p>Last Name: <?php echo $_POST['age']; ?> </p><br>
            <p>Birthday: <?php echo $_POST['address']; ?> </p><br>
            <p>cinema: <?php echo $_POST['cinema']; ?></p>
            <p>numTickets: <?php echo $_POST['numTickets']; ?></p>
            <button type="button" class="bot"><a href="index.html">Back</a></button>

        </div>

    </div>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,600&family=Roboto+Condensed&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Poppins;
}

body{
    width: 100vw;
    height: 100vh;
}

header{
    background-color:  #176B87;
    height: 15%;
}

.content{
    background-color: #64CCC5;
    height: 85%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.info{
    margin: 0 auto;
    background-color: #EEEEEE;
    width: 500px;
    height: 500px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 5.5);
    border-radius: 20px;
}

h1{
    text-align: center;
    font-size: 50px;
    padding: 50px 0 40px 0;
    font-size: 50px;
}

p{
    margin: 5px 100px;
    font-size: 15px;
}


.bot{
    margin: 15px auto;
    width: 100px;
    height: 30px;
    cursor: pointer;
    border-radius: 10px;
    border: 1px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
}
.bot:hover{
    color: #64CCC5;
}
a{
    text-decoration: none;
    color: black;
}
</style>