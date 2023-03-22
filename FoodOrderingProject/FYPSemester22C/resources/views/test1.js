console.log("hello");
fetch("http://localhost:8000/menu/show/1", {
    method: "POST",
    headers: {
        "Content-Type": "application/json",
    },
    body: JSON.stringify({
        category_id: 1,
    }),
})
    .then((res) => {
        return res.json();
    })
    .then((data) => console.log("ERROR"));
