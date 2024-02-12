const timeElement = document.getElementById("time");

function updateTime() {
  const date = new Date();
  const hours = date.getHours().toString().padStart(2, "0");
  const minutes = date.getMinutes().toString().padStart(2, "0");
  const seconds = date.getSeconds().toString().padStart(2, "0");

  const currentTime = `${hours}:${minutes}:${seconds}`;
  timeElement.textContent = currentTime;
}

setInterval(updateTime, 1000); // Update time every second

updateTime(); // Initial update on page load
// promises prototype is also imp for java
