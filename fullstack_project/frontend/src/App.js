import { Route, Routes } from "react-router-dom";
import "./App.css";
import Home from "./components/Home";
import Main from "./components/Main";
import ProductList from "./components/ProductList";

function App() {
  return (
    <>
      <Routes>
        <Route path="/" element={<ProductList />}>
          <Route index element={<Home />} />
          {/* <Route path="" element={<Home />} /> */}
        </Route>
      </Routes>
    </>
  );
}

export default App;
