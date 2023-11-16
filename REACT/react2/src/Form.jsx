import { useState } from "react";

function Form(props) {

  const [text, setText] = useState("")

  const handleChange = (evt) => {
    setText(evt.target.value)
  }

  const handleAdd = (evt) => {
    console.log("ajouter dans form ")
    props.onAdd(text);
  }

  return (
    <div className="composant">
      <h4>Form</h4>
      <input type="text" value={text} onChange={handleChange}/>
      <button onClick={handleAdd}>Add</button>
    </div>
  );
}

export default Form;
