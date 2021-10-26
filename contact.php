<?php
$message_sent=false;
if (isset($_POST['email']) && $_POST['email'] !=''){

    if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        //submit form
        $username = $_POST['names'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "info@acg,co.ke";
        $subject = 'Email From Website';
        $body = "";

        $body .= "From: " . $username . "\r\n";
        $body .= "Email: " . $email . "\r\n";
        $body .= "Phone: " . $phone . "\r\n";
        $body .= "Message: " . $message . "\r\n";

        mail($to, $subject, $body);
        $message_sent = true;
    }

}
?>



<?php include 'includes/header.php';
       include 'includes/contact_nav.php';
?>
<div class="row mt-3">

       <div class="container mt-5 mb-5 justify-content-center">
              <div class="row">
                     <div class="col-sm-6">
                            <form action=" contact.php" method="post" >
                                   <div class="form-group">
                                          <label for="">Names</label>
                                          <input type="text" class="form-control " name="names" id="name">
                                   </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="tel" class="form-control " name="phone" id="phone">
                                </div>
                                   <div class="form-group">
                                          <label for="">Email</label>
                                          <input type="text" class="form-control" name="email" id="email">
                                   </div>
                                   <div class="form-group">
                                          <label for="">Message</label>
                                          <textarea name="message" id="message" cols="45" class="form-control"></textarea>
                                   </div>
                                   <button class="btn btn-primary mb-2">SUBMIT</button>
                            </form>
                     </div>
                     <div class="col-sm-6 pt-1  pr-5">
<!--                            <img width="100%" height="100%"-->
<!--                                 src="data:image/svg+xml;base64,PHN2ZyBpZD0iYTMzZTU5Y2YtZDY0OC00M2FjLWE5MjItOTdiNGRiOWU0ZTRhIiBkYXRhLW5hbWU9IkxheWVyIDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjgwNi4yNzY0MiIgaGVpZ2h0PSI3MTIuNzM2ODUiIHZpZXdCb3g9IjAgMCA4MDYuMjc2NDIgNzEyLjczNjg1Ij48dGl0bGU+ZGV2ZWxvcF9hcHA8L3RpdGxlPjxlbGxpcHNlIGN4PSI3OS4zNzA4OCIgY3k9IjY5Ni4xNDUzNiIgcng9Ijc5LjM3MDg4IiByeT0iMTYuNTkxNDkiIGZpbGw9IiNlNmU2ZTYiLz48cGF0aCBkPSJNMzQyLjIwOTMzLDU0My4xMzQ3bDMuMTA1NDYsNi40MTczMnMxNy42MjYzNSwyMy41MjM0Niw2LjczNzUzLDI3LjIwODczLTE2LjY2NjczLTIyLjMxMDYzLTE2LjY2NjczLTIyLjMxMDYzbC0yLjg3ODg1LTMuNjM4NDdaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTk2Ljg2MTc5IC05My42MzE1NykiIGZpbGw9IiNhMDYxNmEiLz48cGF0aCBkPSJNMzIxLjkwNTI0LDQyMS42MjA4NWwyLjg5NzM4LTEuMjI1NzlzMy40Mjg4MSwxLjIyNTc5LDMuNDI4ODEsNi40OTc2MVMzMjQuMDE0LDUwOS4xMzMxLDMyNC4wMTQsNTA5LjEzMzFsOC40MzQ5MSw0Mi4xNzQ1Ny0xMS41OTgsMi4xMDg3My0xNy45MjQxOS0zOS4wMTE0OFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xOTYuODYxNzkgLTkzLjYzMTU3KSIgZmlsbD0iIzU3NWE4OSIvPjxwYXRoIGQ9Ik0zMjEuOTA1MjQsNDIxLjYyMDg1bDIuODk3MzgtMS4yMjU3OXMzLjQyODgxLDEuMjI1NzksMy40Mjg4MSw2LjQ5NzYxUzMyNC4wMTQsNTA5LjEzMzEsMzI0LjAxNCw1MDkuMTMzMWwyMi42Njg4MywzNi4zNzU1Ny0xNC43NjExLDEwLjU0MzY0LTI4Ljk5NS00MS42NDczOVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xOTYuODYxNzkgLTkzLjYzMTU3KSIgZmlsbD0iIzU3NWE4OSIvPjxwYXRoIGQ9Ik0zMTkuNzk2NTEsNTQzLjkyNzEyczEzLjcwNjc0LDUuMjcxODMsMTIuNjUyMzcsMTQuNzYxMTEtMTQuNzYxMSwxOTguMjIwNTEtMTQuNzYxMSwxOTguMjIwNTFsNC4yMTc0NiwyMS4wODcyOS00MC4wNjU4NSwxLjA1NDM3LTEuMDU0MzctMTM2LjAxMy0yOC40Njc4NCwxMzYuMDEzSDIxMi4yNTEzM2wyOC40Njc4NS0yMzkuMzQwNzNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTk2Ljg2MTc5IC05My42MzE1NykiIGZpbGw9IiMyZjJlNDEiLz48cGF0aCBkPSJNMzE2LjYzMzQyLDc3My43Nzg1OGw5LjQ4OTI4LDkuNDg5MjhzMjIuMTQxNjUsNC4yMTc0NSwxNi44Njk4MywxMS41OTgtNjAuMDk4NzgtMi4xMDg3My02MC4wOTg3OC0yLjEwODczbDEuMDU0MzctMTYuODY5ODNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTk2Ljg2MTc5IC05My42MzE1NykiIGZpbGw9IiMyZjJlNDEiLz48cGF0aCBkPSJNMjQ4LjA5OTczLDc3My43Nzg1OGw5LjQ4OTI4LDkuNDg5MjhzMjIuMTQxNjUsNC4yMTc0NSwxNi44Njk4MywxMS41OTgtNjAuMDk4NzgtMi4xMDg3My02MC4wOTg3OC0yLjEwODczbDEuMDU0MzctMTYuODY5ODNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTk2Ljg2MTc5IC05My42MzE1NykiIGZpbGw9IiMyZjJlNDEiLz48Y2lyY2xlIGN4PSI4OS4xOTUwNiIgY3k9IjI2NC43Mjc0MSIgcj0iMjUuMzA0NzUiIGZpbGw9IiNhMDYxNmEiLz48cG9seWdvbiBwb2ludHM9IjEwNS4wMTEgMjc5LjQ4OSAxMDIuOTAyIDMyMi43MTcgNzAuMjE2IDMwMy43MzkgNzQuNDM0IDI3OS40ODkgMTA1LjAxMSAyNzkuNDg5IiBmaWxsPSIjYTA2MTZhIi8+PHBvbHlnb24gcG9pbnRzPSI2OS4xNjIgMjkzLjE5NSA5OS43MzkgMzE1LjMzNyAxMDUuMDExIDI5OS41MjEgMTE0LjUgMzI0LjgyNiAxMDkuMjI4IDM3MC4xNjQgNjkuMTYyIDI5My4xOTUiIGZpbGw9IiM2M2VkZmYiLz48cGF0aCBkPSJNMjY5LjMwMTc0LDM4My43MDE4MmwzMC40NjE4NSw0Ni4zNTM5NCwxLjIyMTg1LTM4Ljc1NDc2LDMuNzUxNTUsMi45NTY4N2ExNy4zODgsMTcuMzg4LDAsMCwxLDYuNjI0NiwxMy42NTYyM2gwbDE0Ljc2MTExLDEzLjcwNjc0LTUuMjcxODMsNTIuNzE4MjItMS4wNTQzNiw2Mi4yMDc1czYuMzI2MTksNS4yNzE4Miw0LjIxNzQ2LDguNDM0OTItMTAuNTQzNjUsMTAuNTQzNjQtMjAuMDMyOTMsMTAuNTQzNjQtNjguNTMzNjktNy4zODA1NS02OC41MzM2OS0xMS41OTgsMi4xMDg3My01OS4wNDQ0MSwyLjEwODczLTU5LjA0NDQxVjQxMS4wNzcybDI1LjMwNDc1LTE4Ljk3ODU2WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE5Ni44NjE3OSAtOTMuNjMxNTcpIiBmaWxsPSIjNTc1YTg5Ii8+PHBvbHlnb24gcG9pbnRzPSIzNi40NzcgNDY1LjA1NyA1MC4xODQgNDg1LjA5IDU1LjQ1NSA0NjEuODk0IDQ5LjEyOSA0NTcuNjc2IDM2LjQ3NyA0NjUuMDU3IiBmaWxsPSIjYTA2MTZhIi8+PHJlY3QgeD0iMjYxLjQyMDQiIHk9IjYxNS42NjE3NiIgd2lkdGg9IjU4LjUyNTM2IiBoZWlnaHQ9IjIuMTA5MjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC01ODUuNDAwNjkgNTgyLjE4ODQpIHJvdGF0ZSgtNjkuNzM2NzgpIiBvcGFjaXR5PSIwLjIiLz48cGF0aCBkPSJNMjcwLjc2ODU2LDMzMy41ODE0MXMzLjE2MzEtMTUuODE1NDYsMjEuMDg3MjktMTIuNjUyMzdsLTIuMTA4NzMsMS4wNTQzNnMxNi44Njk4My0yLjEwODcyLDE0Ljc2MTExLDcuMzgwNTZjMCwwLDEzLjcwNjczLDguNDM0OTEsMTAuNTQzNjQsMTcuOTI0MTlhMTA3LjI4NCwxMDcuMjg0LDAsMCwwLTQuMjE3NDYsMTYuODY5ODNsLTMuMTYzMDktMy4xNjMwOXMtMy4xNjMwOS0yMS4wODcyOS0yMi4xNDE2Ni0xOC45Nzg1NmMtMTQuMjMzOTIsMS41ODE1NS0yMC4wMzI5Miw4LjMwMzEyLTIxLjUxNTYyLDEzLjE0NjYxYTQyLjc4MTg3LDQyLjc4MTg3LDAsMCwxLTIuNjA0OSw2LjYyNjU5bC0xLjE4NDIyLjI1OTcyUzI1My44OTg3MywzMzguODUzMjQsMjcwLjc2ODU2LDMzMy41ODE0MVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xOTYuODYxNzkgLTkzLjYzMTU3KSIgZmlsbD0iIzJmMmU0MSIvPjxwYXRoIGQ9Ik0yNDkuMTU0MDksNDEwLjAyMjg0bC05LjU5ODItLjQ0NTQ5LTEuOTk5ODEsMS40OTk4NWE2My4xMTg3Niw2My4xMTg3NiwwLDAsMC02LjMyNjE4LDcuMzgwNTVjLTIuMTA4NzMsMy4xNjMxLTI5LjUyMjIxLDgwLjEzMTctMjkuNTIyMjEsODAuMTMxN2EyNi44NjY1NSwyNi44NjY1NSwwLDAsMCwyLjEwODczLDEzLjcwNjc0YzMuMTYzMDksNy4zODA1NSwyOC40Njc4NCw1MS42NjM4NiwyOC40Njc4NCw1MS42NjM4NmwxOC45Nzg1Ni0xMS41OTgtMjUuMzA0NzUtNTEuNjYzODYsMTcuOTI0Mi0yNS4zMDQ3NVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xOTYuODYxNzkgLTkzLjYzMTU3KSIgZmlsbD0iIzU3NWE4OSIvPjxwYXRoIGQ9Ik04MTAuMjU2ODUsMjU1LjEwNzMxaC0zLjczMzU0VjE1Mi44MjgwOGE1OS4xOTY0NSw1OS4xOTY0NSwwLDAsMC01OS4xOTY2Mi01OS4xOTY1MUg1MzAuNjM0NDRhNTkuMTk2NDQsNTkuMTk2NDQsMCwwLDAtNTkuMTk2NjIsNTkuMTk2NTFWNzEzLjkzOTg5YTU5LjE5NjQzLDU5LjE5NjQzLDAsMCwwLDU5LjE5NjYyLDU5LjE5NjVINzQ3LjMyNjY5YTU5LjE5NjQ0LDU5LjE5NjQ0LDAsMCwwLDU5LjE5NjYyLTU5LjE5NjVWMzI3LjkxMTM5aDMuNzMzNTRaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTk2Ljg2MTc5IC05My42MzE1NykiIGZpbGw9IiMzZjNkNTYiLz48cGF0aCBkPSJNNzk0LjQ1NTEzLDE0OC44NjM1NVY3MTcuOTA0MzFhNDQuODk4ODUsNDQuODk4ODUsMCwwLDEtNDQuODg5NzUsNDQuODg5ODZINTI4LjQyOThhNDQuOTAyODUsNDQuOTAyODUsMCwwLDEtNDQuOTA4NDktNDQuODg5ODZWMTQ4Ljg2MzU1YTQ0LjkwMjg0LDQ0LjkwMjg0LDAsMCwxLDQ0LjkwODQ5LTQ0Ljg4OTc2SDU1NS4yNTVhMjEuMzQ4NTQsMjEuMzQ4NTQsMCwwLDAsMTkuNzQ5MzUsMjkuMzg5OTJoMTI2LjA3N2EyMS4zNDgyOSwyMS4zNDgyOSwwLDAsMCwxOS43NDkyNC0yOS4zODk5MmgyOC43MzQ3OEE0NC44OTg4NCw0NC44OTg4NCwwLDAsMSw3OTQuNDU1MTMsMTQ4Ljg2MzU1WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE5Ni44NjE3OSAtOTMuNjMxNTcpIiBmaWxsPSIjZTZlNmU2Ii8+PHJlY3QgeD0iMzMwLjU3OTYyIiB5PSIzNTEuNTY0OTgiIHdpZHRoPSIyMjMuMDkzNjIiIGhlaWdodD0iMjIzLjA5MzYyIiBmaWxsPSIjZmZmIi8+PHJlY3QgeD0iMzc5LjgzODA2IiB5PSIyNTAuOTc0MzYiIHdpZHRoPSIxMjUuODM4MzkiIGhlaWdodD0iOS40NTgyOSIgZmlsbD0iI2ZmZiIvPjxyZWN0IHg9IjM2My4wMDA4OSIgeT0iMjc1LjU1MTE4IiB3aWR0aD0iMTU4LjM2ODA1IiBoZWlnaHQ9IjkuNDU4MjkiIGZpbGw9IiNmZmYiLz48cmVjdCB4PSIzOTQuODY1NDUiIHk9IjM3My4xMDE3NyIgd2lkdGg9Ijg2Ljg0MjA1IiBoZWlnaHQ9IjYuNTI3MjQiIGZpbGw9IiNlNmU2ZTYiLz48cmVjdCB4PSIzOTQuODY1NDUiIHk9IjM5Mi4yNjM1OCIgd2lkdGg9IjEzNC4xMDMwMyIgaGVpZ2h0PSI2LjUyNzI0IiBmaWxsPSIjNjNlZGZmIi8+PHJlY3QgeD0iMzk2LjI1OTc5IiB5PSI0MTAuNTEyNjciIHdpZHRoPSIxMDkuMjkxMDIiIGhlaWdodD0iNi41MjcyNCIgZmlsbD0iI2U2ZTZlNiIvPjxyZWN0IHg9IjM5NC44NjU0NSIgeT0iNDMwLjUzNjEiIHdpZHRoPSI2My44MDIzMiIgaGVpZ2h0PSI2LjUyNzI0IiBmaWxsPSIjZTZlNmU2Ii8+PHJlY3QgeD0iMzk0Ljg2NTQ1IiB5PSI0NTAuMDk0NzUiIHdpZHRoPSI5Ni4yOTQyNSIgaGVpZ2h0PSI2LjUyNzI0IiBmaWxsPSIjNjNlZGZmIi8+PHJlY3QgeD0iMzU1LjI4NDM4IiB5PSIzNzEuMDQ4NTMiIHdpZHRoPSIxMC42MzM3MiIgaGVpZ2h0PSIxMC42MzM3MiIgZmlsbD0iI2U2ZTZlNiIvPjxyZWN0IHg9IjM1NS4yODQzOCIgeT0iMzkwLjIxMDM0IiB3aWR0aD0iMTAuNjMzNzIiIGhlaWdodD0iMTAuNjMzNzIiIGZpbGw9IiM2M2VkZmYiLz48cmVjdCB4PSIzNTUuMjg0MzgiIHk9IjQwOC40NTk0MyIgd2lkdGg9IjEwLjYzMzcyIiBoZWlnaHQ9IjEwLjYzMzcyIiBmaWxsPSIjZTZlNmU2Ii8+PHJlY3QgeD0iMzU1LjI4NDM4IiB5PSI0MjguNDgyODYiIHdpZHRoPSIxMC42MzM3MiIgaGVpZ2h0PSIxMC42MzM3MiIgZmlsbD0iI2U2ZTZlNiIvPjxyZWN0IHg9IjM1NS4yODQzOCIgeT0iNDQ4LjA0MTUxIiB3aWR0aD0iMTAuNjMzNzIiIGhlaWdodD0iMTAuNjMzNzIiIGZpbGw9IiM2M2VkZmYiLz48cmVjdCB4PSIzOTQuODY1NDUiIHk9IjQ2OS43NzU2NyIgd2lkdGg9Ijg2Ljg0MjA1IiBoZWlnaHQ9IjYuNTI3MjQiIGZpbGw9IiNlNmU2ZTYiLz48cmVjdCB4PSIzOTQuODY1NDUiIHk9IjQ4OC45Mzc0OCIgd2lkdGg9IjEzNC4xMDMwMyIgaGVpZ2h0PSI2LjUyNzI0IiBmaWxsPSIjNjNlZGZmIi8+PHJlY3QgeD0iMzk2LjI1OTc5IiB5PSI1MDcuMTg2NTciIHdpZHRoPSIxMDkuMjkxMDIiIGhlaWdodD0iNi41MjcyNCIgZmlsbD0iI2U2ZTZlNiIvPjxyZWN0IHg9IjM5NC44NjU0NSIgeT0iNTI3LjIxIiB3aWR0aD0iNjMuODAyMzIiIGhlaWdodD0iNi41MjcyNCIgZmlsbD0iI2U2ZTZlNiIvPjxyZWN0IHg9IjM5NC44NjU0NSIgeT0iNTQ2Ljc2ODY1IiB3aWR0aD0iOTYuMjk0MjUiIGhlaWdodD0iNi41MjcyNCIgZmlsbD0iI2U2ZTZlNiIvPjxyZWN0IHg9IjM1NS4yODQzOCIgeT0iNDY3LjcyMjQzIiB3aWR0aD0iMTAuNjMzNzIiIGhlaWdodD0iMTAuNjMzNzIiIGZpbGw9IiNlNmU2ZTYiLz48cmVjdCB4PSIzNTUuMjg0MzgiIHk9IjQ4Ni44ODQyNCIgd2lkdGg9IjEwLjYzMzcyIiBoZWlnaHQ9IjEwLjYzMzcyIiBmaWxsPSIjNjNlZGZmIi8+PHJlY3QgeD0iMzU1LjI4NDM4IiB5PSI1MDUuMTMzMzMiIHdpZHRoPSIxMC42MzM3MiIgaGVpZ2h0PSIxMC42MzM3MiIgZmlsbD0iI2U2ZTZlNiIvPjxyZWN0IHg9IjM1NS4yODQzOCIgeT0iNTI1LjE1Njc2IiB3aWR0aD0iMTAuNjMzNzIiIGhlaWdodD0iMTAuNjMzNzIiIGZpbGw9IiNlNmU2ZTYiLz48cmVjdCB4PSIzNTUuMjg0MzgiIHk9IjU0NC43MTU0MSIgd2lkdGg9IjEwLjYzMzcyIiBoZWlnaHQ9IjEwLjYzMzcyIiBmaWxsPSIjZTZlNmU2Ii8+PGNpcmNsZSBjeD0iNDQyLjEyNjQzIiBjeT0iMTQ5Ljc5NDkiIHI9IjcyLjczNTYxIiBmaWxsPSIjZmZmIi8+PHBhdGggZD0iTTYzOC4zODc1NiwyMDcuNzU2NDZhMzUuODU2LDM1Ljg1NiwwLDEsMCwzNS44NTYsMzUuODU2QTM1Ljk2MTM3LDM1Ljk2MTM3LDAsMCwwLDYzOC4zODc1NiwyMDcuNzU2NDZabTAsMTAuNzU2NzhBMTAuNzU2NzksMTAuNzU2NzksMCwxLDEsNjI3LjYzMDc3LDIyOS4yN2ExMC43OTI4OCwxMC43OTI4OCwwLDAsMSwxMC43NTY3OS0xMC43NTY3OVptMCw1MS43ODQyOGEyNi4xMjA4MSwyNi4xMjA4MSwwLDAsMS0yMS41MTM1OC0xMS40ODA4Yy4xNzIzOS03LjE3MTE5LDE0LjM0MjM5LTExLjExODgsMjEuNTEzNTgtMTEuMTE4OHMyMS4zNDExOSwzLjk0NzYxLDIxLjUxMzU3LDExLjExODhhMjYuMTY0MzIsMjYuMTY0MzIsMCwwLDEtMjEuNTEzNTcsMTEuNDgwOFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xOTYuODYxNzkgLTkzLjYzMTU3KSIgZmlsbD0iIzYzZWRmZiIvPjxlbGxpcHNlIGN4PSI3MjUuMzMzMyIgY3k9IjY4Ny4xNDUzNiIgcng9IjgwLjk0MzEyIiByeT0iMTYuNTkxNDkiIGZpbGw9IiNlNmU2ZTYiLz48cGF0aCBkPSJNODM2LjQwNTY2LDUzNC43MDgyMyw4MjUuNzc1LDUzMi44NjQzMnMtMjEuNzI2MjctMTAuMDI1ODktMjMuMDQzMzUtMi40MzI1OFM4MjIuMTQ5LDU0NC43NTAyMSw4MjIuMTQ5LDU0NC43NTAyMWwyMi4zMTQ5NC0yLjM4NjgzWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE5Ni44NjE3OSAtOTMuNjMxNTcpIiBmaWxsPSIjZmZiOGI4Ii8+PHBvbHlnb24gcG9pbnRzPSI3MDEuMzc0IDM2NC4xOTcgNjg2LjQ4MyA0MzIuMDEgNjM2Ljc3IDQzOS4wMzEgNjM0Ljg2NCA0NTkuMDM3IDY5OC45NzMgNDU5LjIwNyA3MzEuMDM1IDQwMC42MjkgNzAxLjM3NCAzNjQuMTk3IiBmaWxsPSIjNTc1YTg5Ii8+PHBvbHlnb24gcG9pbnRzPSI3MDEuMzc0IDM2NC4xOTcgNjg2LjQ4MyA0MzIuMDEgNjM2Ljc3IDQzOS4wMzEgNjM0Ljg2NCA0NTkuMDM3IDY5OC45NzMgNDU5LjIwNyA3MzEuMDM1IDQwMC42MjkgNzAxLjM3NCAzNjQuMTk3IiBvcGFjaXR5PSIwLjIiLz48cGF0aCBkPSJNODIyLjU2NDY3LDQ3Ny40OTUybC03LjU4NjItNy42NzJzLTExLjg3MjEtMjAuNzc1LTE3LjM1MjEzLTE1LjM1NjM0LDcuNTAwMzUsMjIuOTMwMjcsNy41MDAzNSwyMi45MzAyN2wxOS41NTY0LDExLjAwOTExWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE5Ni44NjE3OSAtOTMuNjMxNTcpIiBmaWxsPSIjZmZiOGI4Ii8+PHBhdGggZD0iTTkyNy4wNzUzNCw0MzYuMzg2MTRsOS4zMzk1MS0yLjI3NjU5YTI0LjA0NDE1LDI0LjA0NDE1LDAsMCwwLDIzLjU5ODA5LTI4LjgwNjA2djBhMzEuNDI3NjIsMzEuNDI3NjIsMCwwLDAtMzEuMzg4MTItMzEuNDY3MDdoLS4wMDAwNmEzMS40Mjc2MiwzMS40Mjc2MiwwLDAsMC0zMS40NjcwNywzMS4zODgxMnYwQTI0Ljk3NDQ5LDI0Ljk3NDQ5LDAsMCwwLDkyNy4wNzUzNCw0MzYuMzg2MTRaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTk2Ljg2MTc5IC05My42MzE1NykiIGZpbGw9IiMyZjJlNDEiLz48cG9seWdvbiBwb2ludHM9IjY3NS4yODMgNDk4LjM5OCA2ODIuODg1IDU4MS42NCA2OTYuNjU0IDY2My4zNDggNzE5Ljc3NCA2NjMuMzc3IDcxNi43OTIgNTgzLjIyNCA3MDQuNTg0IDQ4Ni4xMDQgNjc1LjI4MyA0OTguMzk4IiBmaWxsPSIjMmYyZTQxIi8+PHBhdGggZD0iTTg5Ni42MDQ1Miw3NTIuMzU5NDJsLTE1LjQyNSw5LjIyODY2cy0yNC42NjUyNywzLjA1MTctMjAuMDUwOTMsMTAuNzY0Miw1OC41NjY5NCwzLjE1NjI0LDU4LjU3MDgxLjA3MzU2LTEuNTE2MTctMjAuMDM5MzItNC41OTg4NC0yMC4wNDMxOVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xOTYuODYxNzkgLTkzLjYzMTU3KSIgZmlsbD0iIzJmMmU0MSIvPjxwYXRoIGQ9Ik05NDAuMzkxMTYsNTg0LjgzNzlzLS40MzM2NiwxMS45MDA2Ny0xMS4yNDYyNiwzMC4zODMxN2wxLjQ2OTcxLDU3LjAzMTQxLDU1LjM5OTA4LDcwLjk3MTIxTDk2NS45NTUsNzYwLjE1MzIzbC02Ny43MjItNzcuMTUyMDUtMTYuODM4NTUtOTIuNTAxNTNMOTAzLjAwMDI1LDU2OC45NDhaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTk2Ljg2MTc5IC05My42MzE1NykiIGZpbGw9IiMyZjJlNDEiLz48cGF0aCBkPSJNOTgxLjM4OTY4LDc0My4yMTc4OHMxOC40OTIxOCwzLjEwNTksMTUuMzk5ODIsMTAuODA4NzItMTAuODQzNTcsNDMuMTQzODktMzAuODc1MTQsMzguNDk0NzFjMCwwLTkuMjQ4LS4wMTE2Mi02LjE1NzYxLTYuMTczMDlhMTExLjQ5NTg3LDExMS40OTU4NywwLDAsMSw2LjE3ODktMTAuNzgxNjJsLjAyNTE3LTIwLjAzNzM4WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE5Ni44NjE3OSAtOTMuNjMxNTcpIiBmaWxsPSIjMmYyZTQxIi8+PGNpcmNsZSBjeD0iNzIwLjIwNDEiIGN5PSIzMjEuMjAwMTciIHI9IjIzLjEyMDA4IiBmaWxsPSIjZmZiOGI4Ii8+PHBvbHlnb24gcG9pbnRzPSI3MzAuOTc0IDMzNi42MjcgNzMwLjk0MSAzNjIuODMgNzA2LjI4IDM2Mi43OTkgNzA5LjM5NSAzMzYuNiA3MzAuOTc0IDMzNi42MjciIGZpbGw9IiNmZmI4YjgiLz48cGF0aCBkPSJNOTQzLjAzODExLDU5NS4xOTg3NGwtMTUuMjk5OC0yLjU2YTE0MS44MDI0OSwxNDEuODAyNDksMCwwLDAtNTguNjgwMTgsMi40N2w2LjkyMDE3LTY4Ljg5Ljg5OTktOC45OCwxLjkyOTkzLTE5LjIzcy02LjY2OTkyLTI1LjM0LDMuMTIwMTItMzMuOWMxMS45NDk5NS0xMC40NSwyMi41My0xOC43NywyMi41My0xOC43N2wyMy4zNTk4NiwxLjg3YzEzLjA2MDA2LDI2LjA0LDEwLjIzLDU4Ljc3LDEuNDIwMTcsOTQuMDNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTk2Ljg2MTc5IC05My42MzE1NykiIGZpbGw9IiM1NzVhODkiLz48cGF0aCBkPSJNOTE3LjUzNyw0NTAuNzgxODMsODY2LjA0OTI0LDQ5Ny4zNTgybC00NC41NTYwNS0yMy4xMzg3Ni05LjM1NSwxMS40NDkzMywzOS4zNTc2LDM0LjY3ODA5YTE4LjUwMDksMTguNTAwOSwwLDAsMCwxOC44Mzc5LDEuNjE2NDlsNTAuMjA5MjEtMjQuMjk4NTZaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTk2Ljg2MTc5IC05My42MzE1NykiIGZpbGw9IiM1NzVhODkiLz48Y2lyY2xlIGN4PSI3NjQuODMzODkiIGN5PSIyODkuMjQ5OTQiIHI9IjE0LjkxNjY3IiBmaWxsPSIjMmYyZTQxIi8+PHBhdGggZD0iTTk0Ny45MzIzNSwzNzQuODYyNzFBMTQuOTA5NywxNC45MDk3LDAsMCwxLDk2NS43ODQ0NCwzNjAuMjU4YTE0LjkwOTcyLDE0LjkwOTcyLDAsMSwwLTkuMjk5MzMsMjguMDk5NTRBMTQuOTA0NCwxNC45MDQ0LDAsMCwxLDk0Ny45MzIzNSwzNzQuODYyNzFaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTk2Ljg2MTc5IC05My42MzE1NykiIGZpbGw9IiMyZjJlNDEiLz48cGF0aCBkPSJNOTM1LjEzNTUxLDM4My4zMjI1bC0yMC4xMDk4Ny0zLjcwMjc3LTE1LjQ2NTM3LDkuNjkzYTIzLjQ1OTczLDIzLjQ1OTczLDAsMCwwLTEwLjgwNjc1LDIyLjg5NDU2bDE1LjQ4OTE2LTMuOTI2LDMuNDY4MzktOC42OTY5M2gwYTI1LjM3MDcsMjUuMzcwNywwLDAsMCw5LjA0MDYyLDguNzc2NjVjOC43NzU5MSw1LjAzNzY2LDEwLjgxMDQ1LDE1Ljc0NjE2LDExLjg0ODA3LDI3LjI5MzI5bDE2Ljk2NjM1LTkuMjI2NzEsMTAuODEwNjUtMTYuOTQxMTZaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTk2Ljg2MTc5IC05My42MzE1NykiIGZpbGw9IiMyZjJlNDEiLz48cG9seWdvbiBwb2ludHM9IjcxOS4yNzYgMzkwLjAzNyA2NzkuMTE3IDQzMi41ODcgNjgwLjAxNiA0MjMuNjA3IDcxOS4yNzYgMzkwLjAzNyIgb3BhY2l0eT0iMC4yIi8+PC9zdmc+" alt="Adolph Web Developer!">-->
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.803271431234!2d36.786598314101134!3d-1.2924500359958657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10a39343ae3b%3A0x14355e986ccd2ce7!2sLandmark%20plaza!5e0!3m2!1sen!2ske!4v1635191097727!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
              </div>
       </div>

</div>



<?php include 'includes/footer.php'?>
