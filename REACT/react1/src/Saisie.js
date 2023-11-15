import React, { useState } from 'react';

const Saisie = () => {

  console.log("Composant saisie");

  const [message, setMessage] = useState("")

  const handleChange = (evt) => {
    console.log("change " + evt.target.value)
    setMessage(evt.target.value)
  }

  return (
    <div >
      <span>{message}</span>
      <input value={message} onChange={handleChange} />
    </div>
  );
}

export default Saisie;
