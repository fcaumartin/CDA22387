import Form from "./Form";
import List from "./List";

function TodoList(props) {


  const handleAdd = (text) => {
    console.log("Ajouter dan TodoList")
    // let tmp = [...data, text]
    // tmp.push(text)
    // setData([...data, text])
    props.onAdd(text)
  }

  return (
    <div className="composant">
      <h2>TodoList</h2>
      <Form onAdd={handleAdd}/>
      <List list={props.list}/>
    </div>
  );
}

export default TodoList;
