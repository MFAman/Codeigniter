import { Route, Routes } from "react-router-dom";
import "./App.css";
import Home from "./components/Home";
import About from "./components/pages/About";
import Contact from "./components/pages/Contact";
import Error from "./components/pages/Error";
import Main from "./components/pages/Main";
import Property_agent from "./components/pages/Property_agent";
import Property_list from "./components/pages/Property_list";
import Property_type from "./components/pages/Property_type";
import Testimonial from "./components/pages/Testimonial";

function App() {
  return (
    <>
      <Routes>
        <Route path="/" element={<Main />}>
          <Route index element={<Home />} />
          <Route path="/about" element={<About />} />
          <Route path="/contact" element={<Contact />} />
          <Route path="/testimonial" element={<Testimonial />} />
          <Route path="/property_list" element={<Property_list />} />
          <Route path="/property_type" element={<Property_type />} />
          <Route path="/property_agent" element={<Property_agent />} />
          <Route path="/error" element={<Error />} />
        </Route>
      </Routes>
    </>
  );
}

export default App;
