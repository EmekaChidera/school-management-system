<div style="width:250px;">
<form method="post">
    {{csrf_field()}}
    <div>
        <div style="float:left;">
            <label>Name:</label>
        </div>
        <div style="float:right;">
            <input type="text" required>
        </div>
    </div>
    <!--adrress-->
    <div>
        <div style="float:left;">
            <label>address:</label>
        </div>
        <div style="float:right;">
            <input type="text" required>
        </div>
    </div>
    <!--qualificatiion-->
    <div>
        <div style="float:left;">
            <label>Quaalification:</label>
        </div>
        <div style="float:right;">
            <input type="text" required>
        </div>
    </div>
    <!--contact no--> 
    <div>
        <div style="float:left;">
            <label>Contact No:</label>
        </div>
        <div style="float:right;">
            <input type="text" required>
        </div>
    </div>
    <!--email-->
    <div>
        <div style="float:left;">
            <label>Email:</label>
        </div>
        <div style="float:right;">
            <input type="email" required>
        </div>
    </div>
    <br>
    <!--<div style="margin-left:40px">
        <input type="submit" value="submit">
    </div>   -->
</form>
</div>