const API_KEY = "1f8f896b680ecc8409dd6e633f3a8ae1";

class CurrentLocation {
  location = {
    state: "",
    country: "",
  };

  currentWeather = {
    temp: {
      high: null,
      avg: null,
      low: null,
    },
    icon: "",
    desc: "",
    wind: null,
    rain: null,
    sunrise: "",
    sunset: "",
  };

  hourlyWeather = {
    time: "",
    temp: null,
  };
  setCurrentWeather = async (lat, lon) => {
    try {
      //prettier-ignore
      const weatherData = await fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${API_KEY}`);
      // You destructure all the data you need from the server. Yes, destructuring only works on object
      // const data = await weatherData.json(); //instead of doing this, it is wiser to destructure object- N.B, visit destructuring of object
      const { main, weather, rain, sys, wind } = await weatherData.json();

      this.currentWeather = {
        temp: {
          high: main.temp_max,
          low: main.temp_min,
          avg: main.temp,
        },

        icon: weather.icon,
        desc: weather.description,
        wind: wind.speed,
        rain: rain["1h"],
        sunrise: sys.sunrise,
        sunset: sys.sunset,
      };
    } catch (err) {
      //   console.log(err);
    }
  };
}
// try catch block helps to try out codes with possible errors, and catch them without breaking our code. This is because javascript goes one by one.

export default CurrentLocation;
