<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Mon Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/tailwind.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/cd48048bdc.js" crossorigin="anonymous"></script>
</head>
<body class="bg-white rounded ">
    <div class="pb-20">
        <div class="flex bg-black rounded shadow-xl h-18 px-16 py-3 justify-between fixed z-50 left-0 right-0 top-0 "> 
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-infinity  text-5xl" style="color: #e84a4e;"></i>
                <div class="text-white font-bold text-4xl">DUNIA</div>
            </div>
            <div class="flex text-white font-bold text-sm items-center gap-5 cursor-pointer">
                <div>HOME</div>
                <div>SERVICES</div>
                <div>PROJETS</div>
                <div>REVIEWS</div>
                <div>BLOG</div>
                <div>TEAM</div>
                <div>CONTACT US</div>
            </div>
        </div>

        <div class=" bg-cover bg-center h-screen flex flex-col text-white items-center pt-36 px-56 text-center gap-y-6 " style="background-image: url('assets/hector-j-rivas-1FxMET2U5dU-unsplash.jpg');">
            <div class="text-5xl font-semibold pb-4">Lorem Ipsum</div>
            <div class="leading-7">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quam deserunt, officiis praesentium obcaecati quidem quasi
                architecto impedit est, asperiores facere voluptates unde voluptatibus
                ipsam error saepe accusamus amet natus dolor.
            </div>
            <button type="button" class="bg-blue-700 p-2 rounded-lg w-40">Know More</button>
            <div class="h-14 w-8 bg-cover border-2 border-white rounded-full flex items-center justify-center">
                <div class="h-1 w-1 bg-cover bg-white rounded-full animate-bounce">
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'services.php';?>
</body>
</html>
