<?php
    if( isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message']) ) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $fullMessage = "Name: $name \nPhone: $phone \n Email: $email \nMessage: $message";

        mail("h3h394@mailinator.com", "Someone Sent You A Message", $fullMessage);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Form Example</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex">
            <div class="flex w-1/4"></div>
            <div class="flex-1 flex-wrap">
                <form action="" method="post">
                    <h1 class="text-gray-800 w-full mt-10 border-b border-gray-500 text-3xl font-bold">
                        Form Example:
                    </h1>
                    <div class="flex flex-wrap p-4">
                        <label class="w-full">Name:</label>
                        <input type="text" name="name" id="name" value="" placeholder="John Smith" class="px-4 py-2 border border-gray-400 rounded w-full">
                    </div>
                    <div class="flex flex-wrap p-4">
                        <label class="w-full">Phone:</label>
                        <input type="text" name="phone" id="phone" value="" placeholder="John Smith" class="px-4 py-2 border border-gray-400 rounded w-full">
                    </div>
                    <div class="flex flex-wrap p-4">
                        <label class="w-full">Email:</label>
                        <input type="text" name="email" id="email" value="" placeholder="John Smith" class="px-4 py-2 border border-gray-400 rounded w-full">
                    </div>
                    <div class="flex flex-wrap p-4">
                        <label class="w-full">Message:</label>
                        <textarea name="message" id="message" class="px-4 py-2 border border-gray-400 rounded w-full h-32"></textarea>
                    </div>

                    <input class="bg-gray-400 text-gray-800 rounded font-medium w-full p-4 hover:bg-gray-800 hover:text-white cursor-pointer" type="submit" value="Send Message">
                </form>
            </div>
            <div class="flex w-1/4"></div>
        </div>
    </body>
</html>