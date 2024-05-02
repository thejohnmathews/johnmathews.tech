import * as React from "react";
import logo from './logo.svg';
import './App.css';

// 1. import `NextUIProvider` component
import {NextUIProvider} from "@nextui-org/react";

function App() {
  return (
    <NextUIProvider>
      <div> 
        <h1> Hello World! </h1>
      </div>
    </NextUIProvider>
  );
}

export default App;
