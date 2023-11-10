<body>
<div class="box">
<div class="frm">
<h1>Signup Here</h1>
<form action='add' method ='POST'>
@csrf
<input type='text' name='name' placeholder='Enter Your Name' id="input"><br><br>
<input type='text' name='email' placeholder='Enter Your Email' id="input"><br><br><br><br>
<button type='submit' id="input">Signup</button>
</form>
</div>
</div>
</body>


<style>
body{
  background-image: url("/assets/bgg.jpg");
  background-size: cover;
  background-repeat: no-repeat;
}

.box{
    display: flex;
    flex-direction:column;
    align-items: center;
    width : 200px;
    height: 250px;
    background-color: rgba(0,0,0,.5);
    margin: 100px auto;
    border:1.5px solid white;
    border-radius: 10px;
   /*8backdrop-filter: blur(10px);*/
    /* box-shadow: inset -5px -5px  rgba(0,0,0,0.75); */
    padding: 50px 35px;

 }
 #input{
  align: center;
  padding: 7px;
  text-align: center;
  border-radius: 20px;
  border:0.75px solid white;

 }
 input:hover{
  background-color: rgba(255,255,255,.77);
  border:1px solid white;
  box-shadow: 0 0 4px rgba(255,255,255,0.6);


 }
 button{
  width: 175px;
  height:35px;
  top: 5px;
  font-size:18;
 }
 button:hover{
  background-color:#e728f8;
  opacity:80%;
  color:white;
 }
 h1{
  font-family:monaco;
  text-align: center;
  color:white;
  font-size:36;
 }


</style>