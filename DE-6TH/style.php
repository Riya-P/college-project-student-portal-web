
<!DOCTYPE html>
<html>
<head>
  <title></title>

<style>
    @import"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
  margin: 0;
  padding: 0;
  min-height: 100vh;
  font-family: sans-serif;
  background-size: cover;
}

/*college logo*/
.sidenav img{
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 50px; 
}

.login-box{
  width: 280px;
  height: 320px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: black;
  border: 1px solid white;
  padding: 16px ;
  background-color: white;
  margin-left: 400px;
  box-shadow: 10px 10px 5px #888888;
}

.login-box h1{
  margin-top: 50px;
  text-align: center;
  font-size: 30px;
}

.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #03A9F4;
}

.textboxoption{
  width: 70%;
  overflow: hidden;
  font-size: 17px;
  padding: 1px 0;
  margin: 1px 0;
}

.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}

.avatar{
  width: 100px;
  height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

.textbox input{
  border: none;
  outline: none;
  background: none;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}

.addSub{
  margin-top: 150px;
  width: 310px;
  height: 330px;
  background-color: white;
  padding: 5px;
  border-radius: 17px;
  font-size: 18px;
  box-shadow: 10px 10px 5px #888888;
}

.addSub select{
  border: 1px solid #03A9F4;
  padding: 2px;
  font-size: 16px;
  border-radius: 5px;
}

.addSub div{
  text-align: left;
  margin-top: 20px;
}

.btn{
  width: 100%;
  background: none;
  border: 2px solid #03A9F4;
  background-color: #03A9F4;
    color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
  border-radius: 5px;
}

/*side nevigation*/
.sidenav{
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 800px; /* Set the width of the sidebar */
    position: fixed; /* Fixed Sidebar (stay in place on scroll) */
      z-index: 1; /* Stay on top */
      top: 0; /* Stay at the top */
      left: 0;
      background-color: white; /* Black */
      overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 20px;
}

.profnav {
  position: fixed;
  height: 100%;
  width: 20%;
  margin-top: 10%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #039BE5;
  overflow-x: hidden;
  padding-top: 20px;
  /*opacity: 0.6;*/
}

.homenav{
  height: 150px;

}

.up{
  color: white;
  position: fixed;
  height: 125px;
  width: 20%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #66CCFF;
  overflow-x: hidden;
  padding-top: 20px;
}

.up i{
  font-size: 50px;
  margin-left: 30px;
}

.up h2{
  margin-left: 50px;
}

.profnav a{
  margin-top: 2px;
  cursor: pointer;
  display: block;
  margin-left: 30px;
  padding: 10px;
  transition: all 0.3s ease;
  color: white;
  font-size: 25px;
}

.profnav a.active{
  background-color: #4FC3F7;
}

.profnav a:hover{
  background-color: #81D4FA;
}

/* Style page content */
.main {
  margin-left: 160px; /* Same as the width of the sidebar */
  padding: 0px 10px;
}

.profmain{
  margin-left: 23%;
  margin-right: 3%;
  margin-top: 3%;
}

  .btn:hover {
    opacity: 0.9;
}


/* table */

table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 70%;
  background-color: white;
}

tr:nth-child(even){
  background-color: #F9FAFC;
}

th, td {
  padding: 15px;
}

th{
  background-color: #039BE5;
  color: white;
}



</style>


</head>
<body>
<!--   <script>
// Get the modal
var modal = document.getElementById('id01');
var modal = document.getElementById('id03');
var modal = document.getElementById('id02');
var modal = document.getElementById('id11');
var modal = document.getElementById('id12');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> -->
</body>
</html>