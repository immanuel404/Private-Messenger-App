html, body{
    height:100%;
    overflow:hidden;
    padding:0px;
    margin:0px;
    background-color: white
}    
p{color:black;}
a{
    font-size:14px; 
    font-family:helvetica;
    color: white;
}
a:hover{color:blue}

#container{
    box-shadow:2px 2px 10px black; 
    width: 1200px; 
    height: 90%; 
    margin: 2% auto; 
    border-radius:.5%; 
    overflow:hidden;
}
#menu{
    background: #49247E;
    color:white; 
    padding: 15px; 
    font-size:30px;
}
#menu a{
    padding-top: 10px;
    padding-right: 10px;
}




#left-col, #right-col{
    position:relative; 
    float:left; 
    height:90%;
}
#left-col-container ,#right-col-container {
    width:100%; 
    height:100%; 
    margin:0px auto; 
    overflow:auto;
}
#left-col{
    width:25%;
    border-right:1px solid grey;
}
#right-col{
    width:74%; 
}




.grey-back{
    border:1px solid grey;
    border-radius: 5px;
    padding:5px; 
    background: white; 
    margin: 0px auto; 
    margin-top:2px; 
    overflow:auto;
}
.grey-back a{
    color:blue;
}
.grey-back a:hover{
    color:black;
}
.image {
    float:left; 
    width:45px; 
    height:45px; 
    margin-right:5px; 
}




#messages-container{ 
    height:85%, 
    border:1px solid black; 
    overflow:auto;
}
.grey-message, .white-message{
    border:1px solid black;
    border-radius: 10px;
    width: 80%;
    padding: 5px;
    margin: 0px auto;
    margin-top: 4px;
    overflow: auto;
}
.grey-message{
    background: #B69ED8;
}
.textarea{
    width:98%;
    height:25%;
    position:absolute;
    background: #B69ED8;
    bottom:1%;
    margin: 0 1%;
    border-radius: 5px;
    font-size:17px; 
    color:white;
}




#new-message{
    display: none;
    box-shadow: 2px 10px 30px #000000; 
    width: 500px; 
    position:fixed; 
    top: 20%; 
    background:white; 
    z-index:2; 
    left: 50%;
    transform: translate(-50%, 0);
    border-radius:5px;
    overflow: auto;
}
.m-header, .m-footer {
    background:#49247E; 
    margin: 0px;
    color:white; 
    padding:5px; 
}
.m-header{
    font-size:20px; 
    text-align:center;
}
.m-body{padding:0px;}
button{background: lightgrey;border-radius:4px;}