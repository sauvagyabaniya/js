function getDayName(dayNumber) {
    // Input validation: Check if dayNumber is within valid range (0-6)
    if (dayNumber < 0 || dayNumber > 6) {
      return "Invalid day number. Please enter a number between 0 and 6.";
    }
  
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    return days[dayNumber];
  }
  
  // Get the day number from the user
  const dayNumber = parseInt(prompt("Enter a day number (0-6):"));
  
  // Get the day name using the function
  const dayName = getDayName(dayNumber);
  
  // Display the day name
  console.log(`The name of the day for ${dayNumber} is: ${dayName}`);
  