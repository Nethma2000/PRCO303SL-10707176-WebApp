<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Notice</title>
  </head>
  <body>
      <center><h3>Publish Notice </h3></center>
      <br>
      <div>
        <form action="" method="post">
          <div class="form-group">
              <label>To Whom you want to send(Please select your university):</label>
              <select class="form-control" name="to_whom">
                <option>To All</option>
                <option>To Class NSBM</option>
                <option>To Class SLIIT</option>
                <option>To Class CINEC</option>
                <option>To Class JAVA</option>
                <option>To Class IIT</option>
                <option>To Class UOC</option>
                <option>To Class UOM</option>
                <option>To Class UOJ</option>
                <option>To Class UOP</option>
                <option>To Class UOR</option>
                <option>To Class ICBT</option>
                <option>To Class NIBM</option>
              </select>
          </div>
          <div class="form-group">
            <label>Published Date:</label>
            <input type="date" class="form-control" name="post_date">
          </div>
          <div class="form-group">
            <label>Subject of the Notice:</label>
            <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
          </div>
          <div class="form-group">
            <label>Message:</label>
            <textarea name="message" rows="8" cols="80" class="form-control" placeholder="Type your message..."></textarea>
          </div>
          <button type="submit" style="background-color: purple;color:white" class="btn btn-"name="send_notice">Send Notice</button>
        </form>
      </div>
  </body>
</html>
