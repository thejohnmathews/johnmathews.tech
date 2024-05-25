// johnmathews.tech - App.js
// Entry point into the website

/*
TODO:
  - Create home screen
  -> it should behave as a about me page with links?
  -> menu option to resume
  -> menu option to personal blog
*/


// import statements
import './App.css';
import './index.css';
import * as React from "react";
import {NextUIProvider} from "@nextui-org/react";
import HomePage from "./Components/HomePage";
import NavBar from "./Components/NavBar";

function App() {
  return (
    <NextUIProvider>
        <NavBar/>
        <HomePage/>
    </NextUIProvider>
  );
}

export default App;
