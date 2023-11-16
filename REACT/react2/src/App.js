import Header from "./Header";
import TodoList from "./TodoList";
import { useState } from "react";


function App() {

  const [data, setData] = useState(["boire", "rigoler", "manger", "dormir"])

  const handleAdd = (text) => {
    setData([...data, text])
  }

  return (
    <div className="composant">
      <h1>App</h1>

      <Header  list={data}/>
      <TodoList list={data} onAdd={handleAdd}/>
    </div>
  );
}

export default App;
