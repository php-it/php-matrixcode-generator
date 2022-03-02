# PHP Matrix Code-generator

A low profile, yet strong script to generate random matrix codes, also termed a *2D barcode* or simply a *2D code*.

Fast and lightweight! :sunglasses:

Offering support for 5 types of matrix codes: 4x4, 8x8, 16x16, 32x32 and 64x64.

## Usage

Just include the `generateMatrixCode()` function inside your own project and call it by using `echo`. Don't forget to pass in the desired type of matrix code as the `$digits` argument. Below are examples of all 5 different type of codes. The index.php file shows an example  how to use this inside a basic HTML page.

___________________________________________________

### Example: 4x4 matrix code

Generates a 16 square grid. Possible outcomes: 65,536

`echo generateMatrixCode(16);`

![4x4](https://user-images.githubusercontent.com/9900754/156372669-0c38acac-7203-4996-b798-068facce075a.png)

___________________________________________________

### Example: 8x8 matrix code

Generates a 64 square grid. Possible outcomes: 18,446,744,073,709,551,616

`echo generateMatrixCode(64);`

![8x8](https://user-images.githubusercontent.com/9900754/156373003-0b08f6d5-efa4-4461-bf28-bd0186ed18c6.png)

___________________________________________________

### Example: 16x16 matrix code

Generates a 256 square grid. Possible outcomes: 1.1579208923731619542e+77

`echo generateMatrixCode(256);`

![16x16](https://user-images.githubusercontent.com/9900754/156373814-ed163141-97d3-4f92-bdc4-be906e7d6675.png)

___________________________________________________

### Example: 32x32 matrix code

Generates a 1024 square grid. Possible outcomes: 1.7976931348623159077e+308

`echo generateMatrixCode(1024);`

![32x32](https://user-images.githubusercontent.com/9900754/156374664-e667aaa1-d4d2-4960-98ed-487f220769ca.png)

___________________________________________________

### Example: 64x64 matrix code

Generates a 4096 square grid. Possible outcomes: 1.0443888814131525067e+1233 (**virtually unlimited**)

`echo generateMatrixCode(4096);`

![64x64](https://user-images.githubusercontent.com/9900754/156375120-cdabd525-e6a5-4fed-aeb6-3bd11c9c6a68.png)
