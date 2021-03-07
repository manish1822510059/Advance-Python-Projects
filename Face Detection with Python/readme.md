## <h1 align="center"> 💡 Face Detection Vs Face Recognition 💡 </h1>
![1_ANWIw9l4E6Pk3QI5IXej1w](https://user-images.githubusercontent.com/59960810/110234021-28959380-7f4e-11eb-8c38-d2d352b874f5.jpeg)
Face detection and face recognition may look very similar, but in reality, they are not the same. Let’s understand the difference so as not to miss the point.

Face detection is the process of detecting faces, from an image or a video does not matter. The program does nothing more than finding the faces. But on the other 
hand in the task of face recognition, the program finds faces and can also tell which face belongs to which. So it’s more informative than just detecting them. 
There is more programming, in other words, more training in the process.

Let’s say you are looking at the street and the cars are passing. Face detection is like saying the passing object is a car. And facial recognition is like being able to tell the model of the passing car. Here is a nice picture showing the difference in practice.

In this article, I will continue with the task of detecting faces. If you want to learn facial recognition, you can mention me in the comments section below.
## <h2 align="center"> 💡 Face Detection with Python💡 </h2>
I will use the OpenCV library in Python which is used as the primary tool for the tasks of computer vision in Python. If you are new to OpenCV then this task is the best
to start with it.

If you want to learn more about the OpenCV you can watch a complete tutorial on OpenCV from here. Now let’s get started with the task of Face Detection with Python.

First you need to install the OpenCV library in Python which can be easily installed by using the pip command; pip install opencv-python. After installing this library
you need to simply import this by using the command below:
<pre class="wp-block-preformatted">import cv2</pre>

OpenCV library in python is blessed with many pre-trained classifiers for face, eyes, smile, etc. These XML files are stored in a folder. We will use the face detection model. You can download the pre-trained face detection model from here.

After downloading and saving the file in your directory, let’s load it into the face detection program:
<pre class="wp-block-preformatted">face_cascade = cv2.CascadeClassifier('face_detector.xml')</pre>

The next step is to choose an image on which you want to test your code. Make sure there is at least one face in the image so that the face detection program can find at least one face.

After choosing an image, let’s define it in our program. Make sure the image is in the same directory you are working in:
<pre class="wp-block-preformatted">img = cv2.imread('image.jpg')</pre>
## <h2 align="center"> 💡 Detect Faces💡 </h2>
You will be amazed at how short the face detection code is. Thanks to the people who contribute to OpenCV. Here is the code that detects faces in an image:
<pre class="wp-block-preformatted">faces = face_cascade.detectMultiScale(img, 1.1, 4)</pre>

Now the last step is to draw rectangles around the detected faces, which can be easily done with the following code:
<pre class="wp-block-preformatted">for (x, y, w, h) in faces: 
  cv2.rectangle(img, (x, y), (x+w, y+h), (255, 0, 0), 2)
cv2.imwrite("face_detected.png", img) 
print('Successfully saved')</pre>
![2954199cef43](https://user-images.githubusercontent.com/59960810/110234466-a9558f00-7f50-11eb-8fcd-1177caab78c2.jpg)

















