import React from 'react';
import {Row,Container,Col,Button} from 'react-bootstrap';

import {SocialMediaIconsReact} from 'social-media-icons-react';

function Footer() {
 


 
  return (     

    <div style={{
      position:"relative",
      bottom:"0",
      backgroundColor:"#212529",
      backgroundPosition: 'center',
      backgroundSize: 'cover',
      backgroundRepeat: 'no-repeat',
      width: '100%',
      height: '100%',
      marginTop:"auto"
    } }>



    <div style={{color:"white",fontSize:"15pt", paddingTop:"50px",paddingBottom:"50px"}}>
      <Container>
        <Row className="justify-content-md-center">
          <Col sm lg={true}>
          <div style={{fontWeight:"500", textAlign:"Center",fontSize:"25pt"}}>
          ABOUT
          </div>
          Thank you for spending your time in browsing my resume. This is my place in putting my every thoughts and other things about me. I really appreciate your time. Thank you so much
          </Col>
          <Col sm lg={true}>
          <div style={{fontWeight:"500", textAlign:"Center",fontSize:"25pt"}}>
          RESUME
          </div>
          If you need pintable copy of my resume, you can have  here Thank you so much really really appreciate it 
          <div style={{paddingTop:"20px"}}>
          <Button variant="primary">Primary</Button>

          </div>
          </Col>
          <Col sm lg={true} style={{textAlign:"center"}}>
          <div style={{fontWeight:"500"}}>
          OTHER PLATFORM
          </div>
          <IconsSoc iconName="facebook"/>
          <IconsSoc iconName="instagram"/>
          <IconsSoc iconName="github"/>
          <IconsSoc iconName="linkedin" className='icons-set'/>     
          </Col>
        </Row>

      </Container>
      </div>
    </div>   
 

    
  );
}

function IconsSoc({iconName, iconUrl}){
  return (
    <SocialMediaIconsReact borderColor="rgba(0,0,0,0.25)" borderWidth="0"
     borderStyle="solid" icon={iconName} iconColor="rgba(255,255,255,1)"
      backgroundColor="rgba(28,186,223,0)" iconSize="2" roundness="26%" 
      url={iconUrl} size="50"   />
  );

}

export default Footer;