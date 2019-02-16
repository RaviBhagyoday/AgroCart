import numpy as np 
from tensorflow.python.keras.models import load_model

model = load_model("farm_health.model")

test = np.array([22,3,4,3,8,3,0])
test = test.reshape(1,-1)

pred = model.predict(test)
print(np.argmax(pred,axis=1))