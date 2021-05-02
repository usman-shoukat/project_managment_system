import { Component, OnInit } from '@angular/core';
import { Event, Router, NavigationStart } from '@angular/router';

@Component({
  selector: 'app-page-header',
  templateUrl: './page-header.component.html',
  styleUrls: ['./page-header.component.css']
})
export class PageHeaderComponent implements OnInit {
  public bellCollapsed = true;
  isFilter = false;
  isAdd = false;
  splitVal;
  base = '';
  page = '';
  addPage = '';
  pageName = '';
  constructor(public router: Router) { }

  ngOnInit(): void {
    this.router.events.subscribe((event: Event) => {
      if (event instanceof NavigationStart) {
        this.splitVal = event.url.split('/');
        this.base = this.splitVal[1];
        this.page = this.splitVal[2];
        if(this.page === 'categories' || this.page === 'sub-categories') {
          this.isAdd = true;
          this.isFilter = true;
        } else if(this.page === 'services' || this.page === 'booking-list' || this.page === 'payments' || this.page === 'ratings' || this.page === 'wallet' || this.page === 'service-providers' || this.page === 'users') {
          this.isFilter = true;
          this.isAdd = false;
        } else if(this.page === 'rating-type' || this.page === 'subscriptions') {
          this.isFilter = false;
          this.isAdd = true;
        } else {
          this.isAdd = false;
          this.isFilter = false;
        }
        if(this.page) {
          if(this.page.includes('-')) {
            let x = this.page.split('-');
            if (x[1].includes('?') === true) {
              x[1] = x[1].split('?')[0];
            }
            if(x[2]) {
              this.pageName = x[0] + ' ' + x[1] + ' ' + x[2];
            } else {
              this.pageName = x[0] + ' ' + x[1];
            }
            
          } else {
            this.pageName = this.page;
          } 
        }            
      } 
    });
  }

  closeFilter() {
    var filter = document.getElementById('filter_inputs');
    filter.removeAttribute("style");
  }

}
