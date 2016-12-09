# ts-tutorial
In this tutorial you will find the basic code that is needed to connect your Arduino uno with your website, a simple sensor, and connect it to Processing to display your data (which can then also be embeded in your website). 

The index.php file is what you will need to connect your Arduino Uno to your new website. You will need to host your website on a local server such as MAMP for Mac users, or WAMP for Windows users. 

The code in the index.php file sets up the basic connection between your two devices and creates two buttons on your websites' interface that will allow you to turn an LED light on and off, and recieve a confirmation one that has been completed.

The code can be customized to fit your individual needs, but this is where you initialize the communication between the serial port. 

The file with the Arduin LED, is the second half of the code that needs to be executed in the Arduino application and saved as a sketch. This file will tell your Arduino which pin the PHP is communicating with. 

The next file is the code needed to extract ibformation from the Arduino sensor to retrieve the analog output and display it in your serial monitor. In this code you must ensure that the baud number in the beginning of the code matches with the number in your serial monitor in order for it to properly display the data retrieved from the sensor. 

The next piece is to set up the connection between the Arduino application and Processing (Which is the software you will need to download). The code for the arduino is very short and simple and just tells the information where to go and where to be read from. 

The code for the Processing is to connect to the serial monitor and import the data and then graph it as it reads information from the sensor. This can be changed accordingly, you can change the size, the colour, the way it is displayed, etc. 

If you wish to embed the graph that is generated through Processing into your website follow these steps. The way this works is that your sketch is compiled into Javascript and then uses the HTML5 Canvas element to display the output. 
    You must first save your processing file using the .pde extension. Now you can embed this element in your HTML website/ or in the         index.php website - you now need to embed a copy of your .pde file in the same folder that you have your index.php file, along with a     copy of the processing.js file which you can get off of their website.  
    In the head of your HTML file you will have to include these two tags:
        <script type="text/javascript" src="processing.js"></script>
        <canvas data-processing-sources="myProgram.pde"></canvas>

After you have done this, you should have all the building blocks to connect your devices, visualize your data and create a simple website.
