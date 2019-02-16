import numpy as np 
import pandas as pd 
from sklearn.linear_model import LinearRegression
import pickle
from tensorflow.python.keras.models import Sequential
from tensorflow.python.keras.layers import Dense, Dropout, Activation, Flatten
from tensorflow.python.keras.layers import Conv2D, MaxPooling2D
from tensorflow.python import keras



from sklearn.model_selection import train_test_split
df = pd.read_csv('./crop_data.csv')

print(df.head())

df = df.drop(['quantity','Area'],axis=1)
print(df.head())
x = np.array(df.drop(['price/kg'],axis=1))s
classes = df['price/kg']

num_classes=216
y = df['price/kg']

y = keras.utils.to_categorical(y,num_classes)

model = Sequential()
model.add(Dense(12, input_dim=3, activation='relu'))
model.add(Dense(10, activation='relu'))
model.add(Dense(8, activation='relu'))

model.add(Dense(num_classes, activation='softmax'))

model.compile(loss='categorical_crossentropy', optimizer='adam', metrics=['accuracy'])

model.fit(x, y, epochs=200, batch_size=5,validation_split=0.1)

test = np.array([4,2,8])
test = test.reshape(1,-1)

pred=model.predict(test)
pred = np.argmax(pred,axis=1)
print(pred)