import numpy as np 
import pandas as pd 
from tensorflow.python.keras.models import Sequential
from tensorflow.python.keras.layers import Dense, Activation
from tensorflow.python import keras



from sklearn.model_selection import train_test_split
df = pd.read_csv('./test.csv')

print(df.head())

df1 = df.drop(['sector'],axis=1)
print(df1.head())
x = np.array(df1.drop(['sector_health'],axis=1))
classes = df['sector_health']

num_classes=200
y = df['sector_health']

y = keras.utils.to_categorical(y,num_classes)

model = Sequential()
model.add(Dense(12, input_dim=7, activation='relu'))
model.add(Dense(10, activation='relu'))
model.add(Dense(8, activation='relu'))

model.add(Dense(num_classes, activation='softmax'))

model.compile(loss='categorical_crossentropy', optimizer='adam', metrics=['accuracy'])

model.fit(x, y, epochs=200, batch_size=5,validation_split=0.1)

test = np.array([20,2,1,2,9,1,0])
test = test.reshape(1,-1)

pred=model.predict(test)
pred = np.argmax(pred,axis=1)
print(pred)

model.save("farm_health.model")
