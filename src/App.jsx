import { Route, BrowserRouter as Router, Routes } from "react-router-dom";
import Index from "./pages/Index.jsx";
import Login from "./pages/Login.jsx";
import Navigation from "./components/Navigation.jsx";

function App() {
  return (
    <Router>
      <Navigation />
      <Routes>
        <Route path="/login" element={<Login />} />
        <Route exact path="/" element={<Index />} />
      </Routes>
    </Router>
  );
}

export default App;
