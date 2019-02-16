import numpy as np
from tensorflow.python.keras.models import load_model

model = load_model("Crop_price_ann")

test = np.array([4,2,4])
test = test.reshape(1,-1)

pred = model.predict(test)
print(np.argmax(pred,axis=1))


