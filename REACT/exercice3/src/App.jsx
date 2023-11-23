import { useState } from "react";

function App() {

  const [element, setElement] = useState("")
  const [liste, setListe] = useState([])

  const handleChange = (evt) => {
    setElement(evt.target.value)
  }

  const handleClick = () => {
    let tmp = [...liste]
    tmp.push(element)
    setListe(tmp)
  }


  return (
    <div >
      <input type="text" value={element} onChange={handleChange}/>
      <button onClick={handleClick}>Ajouter</button>
      <div>
        {
          liste.map(
            (ligne) => (
              <div>
                {ligne}
              </div>
            )
          )
        }
      </div>
    </div>
  );
}

export default App;
