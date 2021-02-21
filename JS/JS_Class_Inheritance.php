<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Class Inheritance</h2>

<!-- <p id="classin"></p>

<script>
class Car {
  constructor(brand) {
    this.carname = brand;
  }
  present() {
    return 'I have a ' + this.carname;
  }
}

class Model extends Car {
  constructor(brand, mod) {
    super(brand);
    this.model = mod;
  }
  show() {
    return this.present() + ', it is a ' + this.model;
  }
}

let myCar = new Model("Ford", "Mustang");
document.getElementById("classin").innerHTML = myCar.show();
</script> -->

<p>Hello</p>
<p id="classi"></p>
<script>
class Car {
  constructor(brand) {
    this.carname = brand;
  }
  get cnam() {
    return this.carname;
  }
  set cnam(x) {
    this.carname = x;
  }
}

let myCar = new Car("Ford");

document.getElementById("classi").innerHTML = myCar.cnam;
</script>

</body>
</html>
