var stealTools = require("steal-tools");
stealTools.build({
  config:"package.json!npm",
  main:"steal-yii"
},{
  bundleSteal: true
});
