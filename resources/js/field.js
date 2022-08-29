import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-nova-toggle', IndexField)
  app.component('detail-nova-toggle', DetailField)
  app.component('form-nova-toggle', FormField)
})
