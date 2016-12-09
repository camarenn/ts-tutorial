# ts-tutorial
In this tutorial you will find the basic code that is needed to connect your Arduino uno with your website, and a simple sensor. 

The index.php file is what you will need to connect your Arduino Uno to your new website. You will need to host your website on a local server such as MAMP for Mac users, or Wamp for Windows users. 

The code in the index.php file sets up the basic connection between your two devices and creates two buttons on your websites' interface that will allow you to turn an LED light on and off, and recieve a confirmation one that has been completed.

The code can be customized to fit your individual needs, but this is where you initialize the communication between the serial port. 

The file with the Arduin LED, is the second half of the code that needs to be executed in the Arduino application and saved as a sketch. This file will tell your Arduino which pin the PHP is communicating with. 

The next file is the code needed to extract ibformation from the Arduino sensor to retrieve the analog output and display it in your serial monitor. In this code you must ensure that the baud number in the beginning of the code matches with the number in your serial monitor in order for it to properly display the data retrieved from the sensor. 

