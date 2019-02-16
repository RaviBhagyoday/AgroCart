import numpy as np 
import pandas as pd 
from sklearn.linear_model import LinearRegression
import pickle
from sklearn.model_selection import train_test_split
df = pd.read_csv('./crop_data.csv')

print(df.head())

df = df.drop(['quantity','Area'],axis=1)
print(df.head())
x = np.array(df.drop(['price/kg'],axis=1))

y = df['price/kg']





X_train,X_test,Y_train,Y_test =train_test_split(x,y,test_size=0.3)

clf = LinearRegression()

clf.fit(X_train,Y_train)

accuracy = clf.score(X_test,Y_test)


print(accuracy)


test = np.array([4,1,7])
test = test.reshape(1,-1)
predict = clf.predict(test)
print(predict)

pickle_out = open('model.pickle','wb')
pickle.dump(clf,pickle_out)

test = np.array([4,1,5])
test = test.reshape(1,-1)

pred=model.predict(test)
pred = np.argmax(pred,axis=1)
print(pred)
