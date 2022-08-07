<?php 

$clock_in = $_GET['current_time'];
$lunch_in = $_GET['current_time'];
$lunch_out = $_GET['current_time'];
$clock_out = $_GET['current_time'];

class time_Clock_Process{
    
    /*
     * I need to create 4 different functions and a variable called time
     * 
     * 
     * 
     * TIME_IN()
     * LUNCH_IN()
     * LUNCH_OUT()
     * TIME_OUT()
     * 
     * Each of these functions will insert the current time into the 
     * Database
     * 
     * additionally another column called hours needs to be 
     * added to do the math and count the time from the 
     * CLOCK_INs and CLOCK_OUTs 
     * 
     * 
     * I need to save each time in each individual variable and insert each time
     * when the employee presses the clock out button
     * 
     * 
     * 
     */
    
    
    /*This function will insert the current time displayed into the 
      Database as 'TIME_IN'
    */
    function clock_Times(){
        include 'db_connector.php';
        
        $sql = "INSERT  INTO time_clocks VALUES  '$time' time_clocks ";
        
        /*
         * 
         * A problem i'm having with this is if i insert into the table it will 
         * make multiple inserts with just 1 piece of data whether it be clock in, out
         * lunch in or out
         * 
         * I need to come up with a way to save each punch into a variable and insert them
         * all at the same time at clock out
         * 
         * 
         */
    }

}